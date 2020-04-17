<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Location;
use App\Microphone;

use Illuminate\Support\Facades\Validator as validator;
use Illuminate\Database\Eloquent\Builder;

class LocationsController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }


     public function index()
	{
          $locations = Location::all();
        //ddd(  $locations);

		return View ('admin.locations.index')
		->with([ 'locations'=>   $locations]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
		return View ('admin.locations.create');
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
			$location = new Tag();
			$location->name = Input::get('name');
			$location->save();

			return Redirect::to('admin.locations.index')
			->with('flash_message','Your tag been added.');
			}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Request $request, $id)
	{
		try {
			$location = Location::findOrFail($id);
			}
			catch(Exception $e)
			{
        return redirect()->route('admin.locations.index')->with('status', 'Tag not found !');

		}
		# Pass with the $location object so we can do model binding on the form
		return View('admin.locations.edit')
		->with('tag', $location);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, Tag   $locations)
	{
		try {
		$location = Location::findOrFail(Input::get('id'));
		}
		catch(Exception $e) {
		return Redirect::to('/admin.locations/')
		->with('flash_message', 'tag not found');
		}

		$location->name = Input::get('name');
		$location->save();

		return Redirect::action('locationsController@index')
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
		$location = Location::findOrFail(Input::get('id'));
		}
		catch(Exception $e) {
		return Redirect::to('/admin.locations/')
		->with('flash_message', 'Tag not found');
		}
		# Note there's a `deleting` Model event which makes sure
		//category_equipmemt entries are also destroyed
		# See Category.php for more details
		Location::destroy(Input::get('id'));

		return Redirect::action('locationsController@index')
		->with('flash_message','Your Tag has been deleted.');
	} //
}
