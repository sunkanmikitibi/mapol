<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;
use Session;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::allows('admin', auth()->user())) {
            $users = User::all();
            return view('users.index')->withUsers($users);
        }else if(Gate::allows('superadmin', auth()->user())){
            $users = User::all();
            return view('users.index')->withUsers($users);
        } else {
            return view('unauthorized');
        }

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
        //dd($request->all());

        //Validate Form Input
        if(Gate::allows('admin' || 'superadmin', auth()->user())) {
            $this->validate($request, [
                'name' => 'required|string|max:20',
                'username' => 'required|string|max:15',
                'email' => 'required|email',
                'type'=>'required|string',
                'password' => 'required',
                'password_confirmation' => 'same:password',
            ]);

            $user = new User;

            $user->name = $request->name;
            $user->email = $request->email;
            $user->type = $request->type;
            $user->username = $request->username;
            $user->password = Hash::make($request->password);

            $user->save();

            Session::flash('success', 'User Created');

            return back();
        } else {
            return view('unauthorized');
        }

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
