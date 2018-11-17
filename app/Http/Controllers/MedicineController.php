<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicine;
use App\Contraindication;

class MedicineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'medicines' => Medicine::get(),
            'error' => (bool)"",
        ];
        return view('sidebar.medicines.show')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sidebar.medicines.create');
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
            'name' => 'required|max:255',
            'type' => 'required|max:255',
            'activeIngredients' => 'max:255|nullable',
        ];
        $this->validate($request, $rules);

        $medicine = new Medicine();
        $medicine->name = $request->input('name');
        $medicine->type = $request->input('type');
        $medicine->activeIngredients = $request->input('activeIngredients');

        $medicine->save();

        $data = [
            'medicines' => Medicine::get(),
            'error' => 'create',
        ];
        return view('sidebar.medicines.show')->with('data', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'medicine' => Medicine::find($id),
            'contraindications' => Contraindication::where('medicine_id', '=', $id),
        ];
        return view('sidebar.medicines.details')->with('data', $data);
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
            'medicine' => Medicine::find($id),
            'contraindications' => Contraindication::where('medicine_id', '=', $id)->get(),
        ];
        return view('sidebar.medicines.edit')->with('data', $data);
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

        $medicine = Medicine::find($id);
        $rules = [
            'name' => 'required|max:255',
            'type' => 'required|max:255',
            'activeIngredients' => 'max:255|nullable',
        ];
        $this->validate($request, $rules);

        $medicine->name = $request->input('name');
        $medicine->type = $request->input('type');
        $medicine->activeIngredients = $request->input('activeIngredients');
        $medicine->save();

        $data = [
            'medicines' => Medicine::get(),
            'error' => 'update',
        ];
        return view('sidebar.medicines.show')->with('data', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contraindications = Contraindication::where('medicine_id', '=', $id)->delete();
        $isDestroyed = Medicine::destroy($id);
        $data = [
            'medicines' => Medicine::get(),
            'error' => 'destroy',
        ];
        return view('sidebar.medicines.show')->with('data', $data);
    }

    public function askDelete($id)
    {
        return view('sidebar.medicines.ask-delete')->with('medicine', Medicine::find($id));
    }

    public function addContraindication(Request $request, $id)
    {
        $contraindication = new Contraindication();
        $rules = [
            'contraindication' => 'required|max:255',
        ];
        $this->validate($request, $rules);

        $contraindication->disease = $request->input('contraindication');
        $contraindication->medicine()->associate(Medicine::find($id));
        $contraindication->save();

        $data = [
            'medicine' => Medicine::find($id),
            'contraindications' => Contraindication::where('medicine_id', '=', $id)->get(),
        ];
        return view('sidebar.medicines.edit')->with('data', $data);
    }

    public function removeContraindication(Request $request, $id)
    {
        $values = $request->input('check_list');
        if ($values != "") {
            foreach($values as $value) {
                Contraindication::where([ [ 'medicine_id', '=', $id], [ 'disease', '=', $value]])->delete();
            }
        }

        $data = [
            'medicine' => Medicine::find($id),
            'contraindications' => Contraindication::where('medicine_id', '=', $id)->get(),
        ];
        return view('sidebar.medicines.edit')->with('data', $data);
    }

    public function addTypes($id)
    {
        // TODO ADD
        $data = [
            'medicines' => Medicine::get(),
            'error' => (bool)"",
        ];
        return view('sidebar.medicines.show')->with('data', $data);
    }
}
