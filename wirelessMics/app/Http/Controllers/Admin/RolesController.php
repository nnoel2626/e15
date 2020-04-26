<?php

namespace App\Http\Controllers\Admin;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as validator;
use Illuminate\Database\Eloquent\Builder;

class RolesController extends Controller
{


     public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
	{   #retreive all the roles
        $roles = Role::all();

		return view ('admin.roles.index')
		->with('roles', $roles);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create (Request $request)
	{
		return view ('admin.roles.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request, Role $role)
	{
            $request->validate([
            'name' => 'required|unique:role, name',
            'created_at' => 'required',
            'updated_at' => 'required',
            ]);

			$role = new Role();
            $role->name = $request->name;
            $role->created_at = $request->created_at;
            $role->updated_at = $request->updated_at;
			$role->save();

			 return redirect()->route('admin.roles.index')
			->with('status','The role been added.');

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Role $role)
	{
		$role = Role::where('id', '=', $role->id)->first();

		# Pass with the $role object so we can do model binding on the form
		return View('admin.roles.edit')
		->with('role', $role);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, Role $role)
	{  #retrieve this role name from the database
        //ddd($request->all());
        $role = Role::where('id', '=', $role->id)->first();
        //ddd($role);
         $request->validate([
            'name' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);

            // $author->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            // $author->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
        $role->name = $request->name;
        $role->created_at = $request->created_at;
        $role->updated_at = $request->updated_at;
		$role->save();

		 return redirect()->route('admin.roles.index')
		->with('status',' Role has been saved.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Role $role)
	{
        $role = Role::where('name', '=', $role->name)->first();

        $role->delete();

		 return redirect()->route('admin.roles.index')
		->with('status',' Role has been deleted.');
	}
}
