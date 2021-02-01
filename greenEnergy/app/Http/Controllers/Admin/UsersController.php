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

            #Delete user from DB
            $user->delete();

            return redirect()->route('admin.users.index')->with([
                        'status' => 'User has been deleted'
                    ]);
    }

       /**
         * GET /support
         */
    public function profile()
    {
            return view('admin.users.profile');
        }

}









    //   public function delete(User $user)
    //     {
    //          $user = User::where('id', '=', $user->id)->first();
    //        // ddd($user);

    //         if (!$user) {
    //             return redirect()->route('admin.users.index')->with([
    //                 'status' => 'User not found'
    //             ]);
    //         }

    //         return view('admin.users.delete')->with([
    //             'user' => $user
    //         ]);
    //     }




