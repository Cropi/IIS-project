<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'users' => User::get(),
            'error' => (bool)"",
        ];
        return view('sidebar.users.show')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('sidebar.users.edit')->with('user', User::find($id));
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
        $user = User::find($id);
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|confirmed',
            'adress' => 'max:255',
            'bankAccountNumber' => 'regex:/(^([A-Z0-9]*)$)/u',
            'wage' => 'numeric',
        ];
        $this->validate($request, $rules);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password') != "" ? bcrypt($request->input('password')) : "" ;
        $user->adress = $request->input('adress');
        $user->bankAccountNumber = $request->input('bankAccountNumber');
        $user->wage = $request->input('wage');

        $user->save();
        $data = [
            'users' => User::get(),
            'error' => 'update',
        ];
        return view('sidebar.users.show')->with('data', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDestroyed = User::destroy($id);
        $data = [
            'users' => User::get(),
            'error' => 'destroy',
        ];
        return view('sidebar.users.show')->with('data', $data);
    }

    public function askDelete($id)
    {
        if ($id == Auth::user()->id) {
            $data = [
                'users' => User::get(),
                'error' => 'error',
            ];
            return view('sidebar.users.show')->with('data', $data);
        }
        return view('sidebar.users.ask-delete')->with('user', User::find($id));
    }
}
