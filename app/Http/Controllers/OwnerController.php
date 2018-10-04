<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Owner;

class OwnerController extends Controller
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
            'owners' => Owner::get(),
            'error' => (bool)"",
        ];
        return view('sidebar.owners.show')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sidebar.owners.create');
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
            'surname' => 'required|max:255',
            'personalID' => 'required|min:6',
            'adress' => 'max:255',
        ];
        $this->validate($request, $rules);

        $owner = new Owner();
        $owner->name = $request->input('name');
        $owner->surname = $request->input('surname');
        $owner->personalID = $request->input('personalID');
        $owner->adress = $request->input('adress');

        $owner->save();

        $data = [
            'owners' => Owner::get(),
            'error' => 'update',
        ];
        return view('sidebar.owners.show')->with('data', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $owner = Owner::find($id);
        return view('sidebar.owners.edit')->with('owner', $owner);
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
        $owner = Owner::find($id);
        $rules = [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'personalID' => 'required|min:6',
            'adress' => 'max:255',
        ];
        $this->validate($request, $rules);

        $owner->name = $request->input('name');
        $owner->surname = $request->input('surname');
        $owner->personalID = $request->input('personalID');
        $owner->adress = $request->input('adress');
        $owner->save();

        $data = [
            'owners' => Owner::get(),
            'error' => 'update',
        ];
        return view('sidebar.owners.show')->with('data', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDestroyed = Owner::destroy($id);
        $data = [
            'owners' => Owner::get(),
            'error' => 'destroy',
        ];
        return view('sidebar.owners.show')->with('data', $data);
    }

    public function askDelete($id)
    {
        $owner = Owner::find($id);
        return view('sidebar.owners.ask-delete')->with('owner', $owner);
    }
}
