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
	{   #retrieve 10 locations at a time
        $locations = Location::paginate(10);

		return View ('admin.locations.index')
		->with([ 'locations' => $locations]);
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
        $request->validate([
            'building' => 'required',
            'room'=> 'required',
            'city'=> 'required',
            'state'=> 'required',
            'postal_code'=> 'required',
        ]);

        $location = new Location();
		$location->building = $request->building;
        $location->room = $request->room;
        $location->city = $request->city;
        $location->state = $request->state;
        $location->postal_code = $request->postal_code;

		$location->save();

        return redirect()->route('admin.locations.index')
			->with('status','The Location been added.');

	}

	public function edit(Location $location)
	{
        $location = Location::where('id', '=', $location->id)->first();
		# Pass with the $location object so we can do model binding on the form
		return View('admin.locations.edit')
		->with('location', $location);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, Location $location)
	{
         $request->validate([
            'building' => 'required',
            'room'=> 'required',
            'city'=> 'required',
            'state'=> 'required',
            'postal_code'=> 'required',
        ]);


        $location->building = $request->building;
        $location->room = $request->room;
        $location->city = $request->city;
        $location->state = $request->state;
        $location->postal_code = $request->postal_code;
		$location->save();

		return redirect()->route('admin.locations.index')
		->with('status','The Location has been saved.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Request $request, $id)
	{   #retreive the location from the database
        $location = Location::where('id', '=', $location->id)->first();

        #delete locations
        $location->delete();

		return redirect()->route('admin.locations.index')
		->with('status','The Location has been deleted.');
	}
}
