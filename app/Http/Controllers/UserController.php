<?php

namespace NNAK\Http\Controllers;

use NNAK\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $context = [
            'users' => User::all(),
        ];
        return view('user.index', $context);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $raw_pass = str_random(7);
        $request['password'] = bcrypt($raw_pass);
        User::create($request->all());
        return redirect(route('user'))->with('success', "User created. Default set password is {$raw_pass}. Share this for first time login. They could use 'forgot password' to reset a new one.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \NNAK\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \NNAK\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id)
    {
        $context = [
            'user'  => User::find($user_id),
        ];
        return view('user.create', $context);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \NNAK\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
    {
        User::find($user_id)->update($request->all());
        return redirect(route('user'))->with('success', "User updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \NNAK\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id)
    {
        User::find($user_id)->delete();
        return redirect(route('user'))->with('success', "User deleted successfully");
    }
}
