<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Animal;

class AnimalController extends Controller
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
            'animals' => Animal::get(),
            'error' => (bool)"",
        ];
        return view('sidebar.animals.show')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sidebar.animals.create');
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
            // Birthday, lastVisit
        ];
        $this->validate($request, $rules);

        $animal = new Animal();
        $animal->name = $request->input('name');
        $animal->type = $request->input('type');
        $animal->birthday = $request->input('birthday');
        $animal->lastVisit = $request->input('lastVisit');

        $animal->save();

        $data = [
            'animals' => Animal::get(),
            'error' => 'create',
        ];
        return view('sidebar.animals.show')->with('data', $data);
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
        return view('sidebar.animals.edit')->with('animal', Animal::find($id));
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
        $animal = Animal::find($id);
        $rules = [
            'name' => 'required|max:255',
            'type' => 'required|max:255',
            'birthday' => 'date_format:Y-m-d H:i:s|nullable',
            'lastVisit' => 'date_format:Y-m-d H:i:s|nullable',
        ];
        $this->validate($request, $rules);

        $animal->name = $request->input('name');
        $animal->type = $request->input('type');
        $animal->birthday = $request->input('birthday');
        $animal->lastVisit = $request->input('lastVisit');
        $animal->save();

        $data = [
            'animals' => Animal::get(),
            'error' => 'update',
        ];
        return view('sidebar.animals.show')->with('data', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDestroyed = Animal::destroy($id);
        $data = [
            'animals' => Animal::get(),
            'error' => 'destroy',
        ];
        return view('sidebar.animals.show')->with('data', $data);
    }

    public function askDelete($id)
    {
        $animal = Animal::find($id);
        return view('sidebar.animals.ask-delete')->with('animal', $animal);
    }
}
