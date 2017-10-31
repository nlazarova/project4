<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserRole;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('name', 'asc')->paginate(3);

        return view('users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles= UserRole::pluck('name', 'id')->toArray();
        return view('users.create', compact('roles', $roles));
        
        return view('users.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        //Create new user
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->user_role_id = $request->input('user_role_id');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        $url = $request->input('url');
        
        return redirect($url)->withSuccess('User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $user = User::find($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
$roles= UserRole::pluck('name', 'id')->toArray();
        return view('users.edit', compact('roles', $roles));
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       //Update user
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->user_role_id = $request->input('user_role_id');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        $url = $request->input('url');
        return redirect($url)->withSuccess('User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('users')->withSuccess('User deleted successfully');
    }
}
