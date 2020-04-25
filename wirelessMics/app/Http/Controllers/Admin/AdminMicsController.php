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
        # Eager load tags
        $microphones = Microphone::with('tags')->paginate(10);

        return view('admin.microphones.list')
            ->with([
                'microphones'=> $microphones,
                // 'tags' => $tags
                // 'locations' => $locations
        ]);
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
        //ddd($microphones);
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
    public function store( Request $request)
    {   # Validate the request data The `$request->validate` method takes an array of data
        # where the keys are form inputs and the values are validation rules to apply to those inputs
        $request->validate([
            'slug' => 'required | unique:microphones,slug|alpha_dash',
            'building'=> 'required',
            'room'=> 'required',
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

        # Note: If validation fails, it will automatically redirect the visitor back to the form page
        # and none of the code that follows will execute.

        $microphone = new Microphone();
		$microphone->slug = $request->slug;
        // $microphone->building = $request->building;
        // $microphone->room  = $request->room;
        $microphone->make = $request->make;
        $microphone->model = $request->model;
        $microphone->frequency_range = $request->frequency_range;
        $microphone->band = $request->band ;
        $microphone->serial_number = $request->serial_number;
        $microphone->type = $request->type;
        $microphone->group = $request->group;
        $microphone->channel = $request->channel;
        $microphone->assigned_frequency = $request->assigned_frequency;
        $microphone->comments = $request->comments;

        $microphone->save();
        # Once microphone is create, attach the requested tag(s).
         if ($request->has('tag')) {
             $tag = $this->request->input('name');
             $microphone->tags()->attach($request->tag);
        }
        # redirect to microphone list with message
        return redirect()->route('admin.mics.list')->with('status', 'Microphnoe Created!');
    }


    /**
     * GET /book/{slug}
     * Show the details for an individual book  Item $item
     */
    public function show($slug)
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
        #Get all the tags and passing them through the session by using the "with method"
        $tags = Tag::all();
        return view('admin.microphones.edit')
        ->with([
            'microphone' => $microphone,
            'tags' => $tags
        ]);
    }

    # Method for Admin Panel
     public function update(Request $request, Microphone $microphone)
     {   # Check to see if the microphone already exist
         $microphone = Microphone::where('id', $microphone->id)->first();
         $id = $microphone->id;
         # sync tags from request tags if any
        $microphone->tags()->sync($request->tags);
          # Validate the inout request
         $request->validate([
            'slug' => 'required|alpha_dash',
            'building'=> 'required',
            'room'=> 'required',
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


        # create Microphone from request input
        // $microphone->id = $request->id;
        $microphone->slug = $request->slug;
        $microphone->building = $request->building;
        $microphone->room  = $request->room;
        $microphone->make = $request->make;
        $microphone->model = $request->model;
        $microphone->frequency_range = $request->frequency_range;
        $microphone->band = $request->band ;
        $microphone->serial_number = $request->serial_number;
        $microphone->type = $request->type;
        $microphone->group = $request->group;
        $microphone->channel = $request->channel;
        $microphone->assigned_frequency = $request->assigned_frequency;
        $microphone->comments = $request->comments;

        $microphone->save();



        # Once microphone is saved, attach the requested tag(s).
         if ($request->has('tag')) {
             $tag = $this->request->input('name');
             $microphone->tags()->attach($request->tag);
        }
        #redirect to microphone list with status
      return redirect()->route('admin.mics.list')->with('status', 'Microphnoe has been updated!');
    }



    # Method for Admin Panel
     public function destroy(Microphone $microphone )
     {
         //ddd($microphone);
         //Microphone::find($id)->delete();

        $microphone->delete();

        return redirect()->route('admin.mics.list')
        ->with('status', 'Microphone deleted.');

    }

}

