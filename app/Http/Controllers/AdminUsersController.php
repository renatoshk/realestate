<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Role;
use App\Http\Requests\UserRequest;
class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $users = User::all();
        return view('admin.users_register.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::all();
        $roles = Role::pluck('role', 'id')->all();
        return view('admin.users_register.create', compact('users', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //
        if(trim($request->password == '')){
            $input = $request->expect('password');
        }
        else {
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
        }
        User::create($input);
        Session::flash('flash_message', 'The User has been created!');
        return redirect()->back();
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
        $user = User::findOrfail($id);
        $roles = Role::pluck('role', 'id')->all();
        return view('admin.users_register.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        //
        $user = User::findOrfail($id);
        $input = $request->all();
        $user->update($input);
         Session::flash('flash_message', 'The User has been updated!');
        return redirect()->back();
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
        $user = User::findOrfail($id)->delete();
        Session::flash('flash_message', 'The User has been deleted!');
        return redirect()->back();
    }
}
