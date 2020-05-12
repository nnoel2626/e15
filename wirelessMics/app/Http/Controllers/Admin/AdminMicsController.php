<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Location;
use App\Tag;
use App\Microphone;
use Gate;
use Illuminate\Support\Facades\Validator as validator;

class AdminMicsController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

        /**
     * GET /microphones
     * Displayy all the microphones in the Admin Panel
     */
    # Method for Admin Panel
    public function list()
    {
        # Eager load tags while retrieve the all the Microphones
        $microphones = Microphone::with('tags')->paginate(10);

        return view('admin.microphones.list')
            ->with(['microphones'=> $microphones]);
    }

    /**
    * GET /microphones/create
    * Display the form to add a new book
    */
    # Method for Admin Panel
    public function create(Request $request)
    {
        $locations = Location::orderBy('building')->select(['id', 'room', 'building'])->get();
        $microphones = Microphone::with('tags')->get();

        $tags = Tag::all();

        return view('admin.microphones.create')
        ->with([
            'microphones' => $microphones,
            'tags' => $tags,
            'locations' => $locations
        ]);

    }

    /**
    * POST /microphones
    * Process the form for adding a new book
    */
    public function store( Request $request, Microphone $microphone)
    {
        # Validate the request data The `$request->validate` method takes an array of data
        # where the keys are form inputs and the values are validation rules to apply to those inputs
        # Note: If validation fails, it will automatically redirect the visitor back to the form page
        # and none of the code that follows will execute.
        $request->validate([
            'slug' => 'required | unique:microphones,slug|alpha_dash',
            'location_id' => 'required|integer',
            'make'=> 'required',
            'model'=> 'required',
            'frequency_range'=> 'required',
            'band'=> 'required',
            'serial_number'=> 'required',
            'type'=> 'required',
            'group'=> 'required',
            'channel'=> 'required',
            'assigned_frequency'=> 'required',
            'comments'=> 'min:8'
        ]);

        $newMicrophone = new Microphone();
		$newMicrophone->slug = $request->slug;
        $newMicrophone->make = $request->make;
        $newMicrophone->model = $request->model;
        $newMicrophone->frequency_range = $request->frequency_range;
        $newMicrophone->band = $request->band ;
        $newMicrophone->serial_number = $request->serial_number;
        $newMicrophone->type = $request->type;
        $newMicrophone->group = $request->group;
        $newMicrophone->channel = $request->channel;
        $newMicrophone->assigned_frequency = $request->assigned_frequency;
        $newMicrophone->comments = $request->comments;
        $newMicrophone->location_id = $request->location_id;
        $newMicrophone->save();



        # After the new microphone is created, attach the requested tag name and location.
         if ($request->has('tags')) {
             $tags = $request->input('tags');
             $newMicrophone->tags()->attach($tags);
            }

        # redirect to microphone list with message
        return redirect()->route('admin.mics.list')
            ->with('status', 'Microphnoe Created!');
    }


    /**
     * GET /book/{slug}
     * Show the details for an individual book  Item $item
     */
    public function show(Microphone $microphone, $slug)
     {

        $microphone = Arr::first($microphones, function ($value, $key) use ($slug) {
            return $key == $slug;
        });

         return view('admin.microphones.show')
        ->with([
            'microphone' => $microphone,
            'slug' => $slug
        ]);
    }


    # Method for Admin Panel
    public function edit( Microphone $microphone)
     {
       ///($microphone);
        $microphone = Microphone::with('location')->where('id', '=', $microphone->id)->first();
        #Get all the tags and passing them through the session by using the "with method"
        $tags = Tag::all();

        return view('admin.microphones.edit')
        ->with([
            'microphone' => $microphone,
            'tags' => $tags,
        ]);
    }

    # Method for Admin Panel
     public function update(Request $request, Microphone $microphone)
     {
        
          # Validate the inout request
         $request->validate([
            'slug' => 'required|alpha_dash',
            'make'=> 'required',
            'model'=> 'required',
            'frequency_range'=> 'required',
            'band'=> 'required',
            'serial_number'=> 'required',
            'type'=> 'required',
            'group'=> 'required',
            'channel'=> 'required',
            'assigned_frequency'=> 'required',
            'location_id' => 'required|integer',
            'comments'=> 'min:8'
        ]);

              # Check to see if the microphone already exist
        // $microphone = Microphone::with('locations')->where('id', '=', $microphone->id)->first();
        $microphone = Microphone::where('id', '=', $microphone->id)->first();
         //$id = $microphone->id;
         # sync tags from request tags if any
        $microphone->tags()->sync($request->tags);
        # create Microphone from request input
    // $microphone->id = $request->id;
        $microphone->slug = $request->slug;
        $microphone->make = $request->make;
        $microphone->model = $request->model;
        $microphone->frequency_range = $request->frequency_range;
        $microphone->band = $request->band ;
        $microphone->serial_number = $request->serial_number;
        $microphone->type = $request->type;
        $microphone->group = $request->group;
        $microphone->channel = $request->channel;
        $microphone->assigned_frequency = $request->assigned_frequency;
        $microphone->location_id = $request->location_id;
        $microphone->comments = $request->comments;

        $microphone->save();


        #redirect to microphone list with status
      return redirect()->route('admin.mics.list')->with('status', 'Microphnoe has been updated!');
    }



     public function delete(Microphone $microphone)
    {
             $microphone = Microphone::where('id', '=', $microphone->id)->first();
           // ddd($microphone);

            if (!$microphone) {
                return redirect()->route('admin.mics.list')->with([
                    'status' => 'microphone not found'
                ]);
            }

            return view('admin.microphones.delete')->with([
                'microphone' => $microphone
            ]);
    }


    # Method for Admin Panel
     public function destroy(Microphone $microphone )
     {
         $microphone = Microphone::where('id', '=', $microphone->id)->first();
         //ddd($microphone);


        $microphone->delete();

        return redirect()->route('admin.mics.list')
        ->with('status', 'Microphone deleted.');

    }

}

