<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        # Eager load categories
        $microphones = Microphone::with('tags')
        ->orderBy('building')
        ->get();
	   
      return view('admin.microphones.list')
        ->with([
            'microphones'=> $microphones
            ]);
    }

    /**
    * GET /microphones/create
    * Display the form to add a new book
    */
    # Method for Admin Panel
    public function create(Request $request)
    {
        $microphones = Microphone::with('tags')->get();
       // ddd($microphones);
        // $tags = array();
        // foreach(Tag::all() as $tag){

        // $tags[$tag->id] = $tag->name;
        // }
        $tags = Tag::all();

        return view('admin.microphones.create')
        ->with([
            'microphones' => $microphones,
            'tags' => $tags
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
            'slug' => 'required',
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

        $microphone = new Microphone;
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
       //dd($microphone);
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
     {  # sync tags from request tags if any
        $microphone->tags()->sync($request->tags);

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
     public function destroy(Request $request, Microphone $microphone)
     {
        //$microphone = Microphone::where('author', '=', 'F. Scott Fitzgerald')->first();

         if (!$microphone) {

         $request->session()->flash('error', 'Error deleting the microphone.Microphone not found.');
        } else {

            $microphone->delete();
            $request->session()->flash('success', $microphone->slug . ' ' . 'microphone has been deleted');
        }

          return redirect()->route('admin.mics.list');

        }

}




# First get a book to delete
// $book = Book::where('author', '=', 'F. Scott Fitzgerald')->first();

// if (!$book) {
//     dump('Did not delete- Book not found.');
// } else {
//     $book->delete();
//     dump('Deletion complete; check the database to see if it worked...');
// }

//   $validator = Validator::make($request->all(), [
        //     'title' => 'required|unique:posts|max:255',
        //     'body' => 'required',
        // ]);

    //     if ($validator->fails()) {
    //         return redirect('admin/microphones/create')
    //                     ->withErrors($validator)
    //                     ->withInput();
    //     }


//     $articles = Article::whereHas('tags', function($query) use ($tagName) {
//   $query->whereName($tagName);
// })->get();


             //ddd($microphone);
            // try {
			// 	$microphone = Equipment::findOrFail($microphone);
			// 	}
			// 	catch(Exception $e)
			// 	{
			// 	return Redirect::to('/admin.equipment.index')
			// 	->with('flash_message', 'Equipment not found');
			// 	}
			// # Pass with the $Category object so we can do model binding on the form
			// return View('/admin.equipment.edit', compact('equipment'));
        //ddd($microphone);
        //dump($request->all());


         // if($validator->fails()) {
        //     return redirect('admin/microphones/create')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
//    $request->session()->flash('success', $microphone->slug . ' ' . 'microphone has been updated');
//         } else {
//             $request->session()->flash('error', 'There was an error updating the microphone');
//         }