<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use View;

use App\Treatment;
use App\Animal;
use App\Medicine;
use App\User;
use App\Dosage;
use App\Owner;
use App\MedicineType;
use App\Contraindication;
use \Datetime;

class TreatmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('veterinarian')->except(['index', 'show']);
        View::share('types', MedicineType::get());
        View::share('contraindications', Contraindication::get());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'treatments' => Treatment::get(),
            'error' => (bool)"",
        ];
        return view('sidebar.treatments.show')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'animals' => Animal::get(),
            'time' => (new DateTime('now'))->format('Y-m-d H:i:s'),
        ];
        return view('sidebar.treatments.create')->with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'diagnosis' => 'required',
            'startDate' => 'date_format:Y-m-d H:i:s|nullable',
            'state'     => 'max:255',
            'price'     => 'numeric',
        ];
        $this->validate($request, $rules);

        $treatment = new Treatment();
        $treatment->diagnosis = $request->input('diagnosis');
        $treatment->startDate = $request->input('startDate') != "" ? $request->input('startDate') : date("Y-m-d H:i:s") ;
        $treatment->state = $request->input('state');
        $treatment->price = $request->input('price');

        $user = User::find(Auth::user()->id);
        $treatment->user()->associate($user);

        $animal = Animal::find($request->input('forAnimal'));
        $treatment->animal()->associate($animal);

        $treatment->save();
        $data = [
            'treatments' => Treatment::get(),
            'error' => 'create',
        ];
        return view('sidebar.treatments.show')->with('data', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dosages = Dosage::where('treatment_id', '=', $id)->get();
        $animal = Animal::find(Treatment::find($id)->animal_id);
        $owner = NULL;
        if (isset($animal->owner_id))
            $owner = Owner::find($animal->owner_id);
        $user = User::find(Treatment::find($id)->user_id);
        $treatment = Treatment::find($id);

        return view('sidebar.treatments.show-prescriptions')->with([
            'dosages' => $dosages,
            'animal' => $animal,
            'owner' => $owner,
            'user'  => $user,
            'treatment' => $treatment,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'treatment' => Treatment::find($id),
            'animals'   => Animal::get(),
        ];
        return view('sidebar.treatments.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'diagnosis' => 'required',
            'state'     => 'max:255',
            'price'     => 'numeric',
        ];
        $this->validate($request, $rules);

        $treatment =  Treatment::find($id);
        $treatment->diagnosis = $request->input('diagnosis');
        $treatment->state = $request->input('state');
        $treatment->price = $request->input('price');

        // $user = User::find(Auth::user()->id);
        // $treatment->user()->associate($user);

        $animal = Animal::find($request->input('forAnimal'));
        $treatment->animal()->associate($animal);

        $treatment->save();
        $data = [
            'treatments' => Treatment::get(),
            'error' => 'create',
        ];
        return view('sidebar.treatments.show')->with('data', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDestroyed = Treatment::destroy($id);
        return redirect()->route('treatments');
    }

    public function askDelete($id)
    {
        $treatment = Treatment::find($id);
        return view('sidebar.treatments.ask-delete')->with('treatment', $treatment);
    }

    public function addPrescription($id)
    {
        $treatment = Treatment::find($id);
        $data = [
            'treatment' => $treatment,
            'medicines' => Medicine::get(),
            'users' => User::get(),
            'error' => '',
        ];
        if (!isset($treatment->animal_id) || !isset($treatment->animal->owner_id)) {

            $data = [
                'treatments' => Treatment::get(),
                'users' => User::get(),
                'error' => 'error',
            ];
            return view('sidebar.treatments.show')->with('data', $data);
        }
        return view('sidebar.treatments.add-prescription')->with('data', $data);
    }

    public function storePrescription(Request $request, $id)
    {
        $dosage = new Dosage();

        $rules = [
            'disease'        => 'required|max:255',
        ];

        $needsExtraHelp = $request->input('performedBy');
        if ($needsExtraHelp) {
            $extrapHelp = User::find($request->input('givenBy'));
            $dosage->medicineGivenBy()->associate($extrapHelp);
            $extrapHelp->medicinesGivenBy->add($dosage);
        }
        else {
            $rules['amount1'] = 'numeric|min:0';
            $rules['timeToConsume1'] = 'numeric|min:0';
            $dosage->amount1 = $request->input('amount1');
            $dosage->amount2 = $request->input('amount2');
            $dosage->timeToConsume1 = $request->input('timeToConsume1');
            $dosage->timeToConsume2 = $request->input('timeToConsume2');
        }
        $this->validate($request, $rules);

        $dosage->disease = $request->input('disease');

        $medicine = Medicine::find($request->input('forMedicine'));
        $dosage->medicine()->associate($medicine);

        $treatment = Treatment::find($id);
        $dosage->treatment()->associate($treatment);

        $user = User::find(Auth::user()->id);
        $dosage->user()->associate($user);

        $medicine->dosages->add($dosage);
        $treatment->dosages->add($dosage);
        $user->dosages->add($dosage);

        $animal = Animal::find($treatment->animal_id);
        $medicineTypes = MedicineType::where([['medicine_id', '=', $medicine->id], ['type', '=', $animal->type]])->get();
        if (count($medicineTypes) == 0) {
            $data = [
                'treatment' => $treatment,
                'medicines' => Medicine::get(),
                'users' => User::get(),
                'error' => 'error',
            ];
            return view('sidebar.treatments.add-prescription')->with('data', $data);
        }

        $dosage->save();

        $data = [
            'treatments' => Treatment::get(),
            'error' => 'add-prescription',
        ];
        return view('sidebar.treatments.show')->with('data', $data);
    }
}
