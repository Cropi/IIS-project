<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Treatment;
use App\Animal;
use App\Medicine;
use App\User;

class TreatmentController extends Controller
{
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

        return view('sidebar.treatments.create')->with('animals', Animal::get());
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
        //
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
        ];
        return view('sidebar.treatments.add-prescription')->with('data', $data);
    }

    public function storePrescription($id)
    {
        
    }
}
