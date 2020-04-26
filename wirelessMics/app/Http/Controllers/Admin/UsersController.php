<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Gate;
use Illuminate\Http\Request;

class UsersController extends Controller
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
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user = User::where('id', '=', $user->id)->first();
        #Check the user object contain the id
        //ddd($user);
        #if current user is not admin redirect to Admin Panel.
        if (Gate::denies('edit-users')) {
            return redirect(route('admin.users.index'));
        }

        #Get all the roles and passing them through the session by using the "with method"
        $roles = Role::all();
        return view('admin.users.edit')
        ->with([
             'user' => $user,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',

        ]);

        $user = User::where('id', '=', $user->id)->first();
        $user->roles()->sync($request->roles);


        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('admin.users.index')
        ->with('status','The User has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user = User::where('id', '=', $user->id)->first();

        #if current user is not admin, redirect to Admin Panel.
        if (Gate::denies('delete-users')) {
            return redirect(route('admin.users.index'));
        }

        //dd($user);

        #Remove all roles for this current user.
        //$user-roles()->detach($role);

        #Delete user from DB
        $user->delete();

        return redirect()->route('admin.users.index');
    }


     /**
     * GET /support
     */
    public function profile()
    {
         //$username

        // $user = User::where('username', '=', $username);

        // if($user->count()) {

        //     $user = $user->first();

        //     return View::Make('profile.user')
        //         ->with('user', $user);
        // }

        // return App::abort(404);
    //}

        return view('admin.users.profile');
    }
}

//     $request->session()->flash('success', $user->name . ' ' . 'user has been updated');
        // } else {
        //     $request->session()->flash('error', 'There was an error updating the user');
        // }

        // $request->session()->flash('warning', 'Testing warning flash message');
