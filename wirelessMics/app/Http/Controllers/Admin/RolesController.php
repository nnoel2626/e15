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
	{
        $roles = Role::all();
            //ddd($roles);
        //return "this is the form ";
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
	public function store(Request $request)
	{
        //$request->validate([
		$validator = Validator::make(Input::all());
		if( $validator->passes()){
			$role = new Tag();
			$role->name = Input::get('name');
			$role->save();

			 return redirect()->route('admin.roles.index')
			->with('flash_message','Your tag been added.');
			}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// public function show(Tag $roles)
	// {
	// 	 try {
	// 	$role = Tag::findOrFail($id);
	// 	 }
	// 	 catch(Exception $e) {
	// 	 return Redirect::to('admin.roles')
	// 	 ->with('flash_message', 'Tag not found');
	// 	 }
	// 	 return View ('admin.roles.show')->with('tag', $role);
	// }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Request $request, $id)
	{
		try {
			$role = Role::findOrFail($id);
			}
			catch(Exception $e)
			{
        return redirect()->route('admin.roles.index')->with('status', 'Role not found !');

		}
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
	public function update(Request $request, Role $roles)
	{
		try {
		$role = Tag::findOrFail(Input::get('id'));
		}
		catch(Exception $e) {
		return Redirect::to('/admin.roles/')
		->with('flash_message', 'role not found');
		}

		$role->name = Input::get('name');
		$role->save();

		 return redirect()->route('admin.roles.index')
		->with('flash_message','Your Tag has been saved.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Request $request, $id)
	{
		try {
		$role = Tag::findOrFail(Input::get('id'));
		}
		catch(Exception $e) {
		return Redirect::to('/admin.roles/')
		->with('flash_message', 'Role not found');
		}
		# Note there's a `deleting` Model event which makes sure
		//category_equipmemt entries are also destroyed
		# See Category.php for more details
		Tag::destroy(Input::get('id'));

		 return redirect()->route('admin.roles.index')
		->with('flash_message','Your Tag has been deleted.');
	}
}