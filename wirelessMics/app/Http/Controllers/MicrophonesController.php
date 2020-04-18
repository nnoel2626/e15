<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Tag;
use App\Location;
use App\Microphone;
use Gate;
use Arr;
use Str;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;

class MicrophonesController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }


     public function search(Request $request)
    {
        # Note: if validation fails, it will redirect
        # back to `/home` (page from which the form was submitted)
        $request->validate([
           'searchTerms' => 'required',
            'searchType' => 'required',
        ]);


        # Start with an empty array of search results;
        $searchResults = [];

        if ($request->has('searchTerms') & $request->has('searchType')) {

            # Get the input values (default to null if no values exist)
            $searchTerms = strtolower($request->input('searchTerms', null));
            $searchType = strtolower($request->input('searchType', null));


            $microphones  = Microphone::where ('band','LIKE', '%'.$searchTerms.'%')
             ->orwhereHas('location', function ($q) use ($searchTerms, $searchType){
                $q->where('building', 'like', '%'.$searchTerms.'%')
                  ->orWhere('room', 'like', '%'.$searchTerms.'%');
             })->get();

            $searchResults = $microphones;
                //ddd( $searchResults);
            return redirect('home')->with([
             'searchTerms' => $searchTerms,
             'searchType' => $searchType,
             'searchResults' => $searchResults

            ]);

         }


    }
        /**
         * GET /installed-list
         */
    public function installed(Request $request)
    {
        # Retrieve all $tags
        $tags = Tag::all();

        #Retrieve all $microphones with at least one tag_name containing words installed
        $microphones = Microphone::whereHas('tags', function ($query) use($tags) {
        $query->where('name','Installed');
         })->orderBy('assigned_frequency')
         ->get();

        return view('microphones.installed')->with([
           'tags' => $tags,
           'microphones' => $microphones
        ]);
    }
        /**
         * GET / portable-list
         */
    public function portable(Request $request)
    {
        # Retrieve all $tags
        $tags = Tag::all();

        #Retrieve all $microphones with at least one tag_name containing words installed
        $microphones = Microphone::whereHas('tags', function ($query) use($tags) {
         $query->where('name','Portable');
        })->orderBy('assigned_frequency')
         ->get();


        return view('microphones.portable')->with([
            'tags' => $tags,
            'microphones' => $microphones
        ]);
    }

      /**
     * GET /microphones
     * Show all the microphones in the library
     */
    public function index()
    {
        #eager loading to reduce the number of queries
        $microphones = Microphone::with('tags')->get();
        # Alphabetize the microphones
        // $microphones = Arr::sort($microphoneData, function ($value) {
        //     return $value['slug'];
        // });

        return view('microphones.index')
        ->with('microphones', $microphones);

    }


    public function show($slug) {
         $microphone = Microphone::where('slug', '=', $slug)->first();
        //$microphone = Microphone::findOrFail($id);

        return view('microphones.show')->with([
            'microphone'=> $microphone,
            'slug' => $slug
            ]);
    }

}

/**
     * GET /filter/{$category}/{subcategory?}
     * Example demonstrating multiple parameters
     * Not a feature we're actually building, so I'm commenting out
     */
    // public function filter($category, $subcategory = null)
    // {
    //     $output = 'Here are all the microphones under the category '.$category;

    //     if ($subcategory) {
    //         $output .= ' and also the subcategory '.$subcategory;
    //     }

    //     return $output;
    // }
 // strcmp ( string $str1 , string $str2 ) : int

     # This algorithm will filter our $microphones down to just the microphones where either
        # the title or author ($searchType) matches the keywords the user entered ($searchTerms)
        # The search values are convereted to lower case using PHP's built in strtolower function
        # so that the search is case insensitive
        // $searchResults = array_filter($microphones, function ($microphone) use ($searchTerms, $searchType) {
        //     return Str::contains(strtolower($microphone[$searchType]), strtolower($searchTerms));
        // });

        //      if($query) {
	    //     # Eager load categories
	    // $quipment = App\Equipment::with('categories')
	    // ->whereHas(function($q) use($query) {
	    // $q->where('name', 'LIKE', "%$query%");
	    // })
	    // ->orWhereHas('categories', function($q) use($query) {
	    // $q->where('name', 'LIKE', "%$query%");
	    // })
	    // ->orWhere('brand', 'LIKE', "%$query%")
	    // ->orWhere( 'LIKE', "%$query%")
        // ->get();


	        # Note on what `use` means above:
	        # Closures may inherit variables from the parent scope.
	        # Any such variables must be passed to the `use` language construct.
	    //}
	        # Otherwise, just fetch all Equipments
	    // else {
	    //     # Eager load categories
	    // $equipment = App\Equipment::with('categories')->get();
	    // }
        // return $equipment;

          // $searchResults = Microphone::where('building', $searchTerms)
            //                 ->orWhere('room', $searchTerms)
            //                 ->orWhere('frequency_band', $searchTerms)
            //                 ->orWhere( $searchType, $searchType)
            //                 ->get();
// foreach($microphones as $microphone){
        //     //$microphones = $microphone->make);
        //     $building = $microphone->location->building;
        //     $room = $microphone->location->room;

        //     foreach($microphone->tags as $tag){
        //         dump( $tag->name );
        //     }

        // }



        //  foreach ($microphone->tags as $tag){
        //    $tags = $microphone->tags->name;
        //     }
        //  ddd($tags);

            //$locations = $book->author;
            // foreach ($microphones as $microphone) {
            //  $building = $microphone->location->building;
            // $room = $microphone->location->room;
            //  }






       // ddd($microphones);
         #Get loop through the tags
        // $tags = array();
        // foreach(Tag::all() as $tag){
        // $tags[$tag->id] = $tag->name;
        // }


 // $searchString       = Input::get('search');

            // if($searchTerms)
            // {
            //     $locations = Location::with('microphones')->orderBy($order, $by)->whereHas('microphones', function ($query) use ($searchTerms, $searchType){
            //         $query->where('name', 'like', '%'.$searchTerms.'%');
            //     })->get();
            // }
            // else {
            //     $locations     = Location::with('microphones')->orderBy($order, $by)->get();
            // }
            // ddd($locations );

            // if ($stype = 'building')  {
            //  $searchType = Location::where('building','=', $stype)->get();
            // }

            // if ($sType = 'room')  {
            //     $searchType = Location::where('room','=', $stypes)->get();
            // }
             //ddd($searchType);
           // ddd($locations);
               // foreach ($locations as $location) {

                    // if ($request->has('building'))  {


                        //return $searchType;
                   // }
                        // $searchType = Location::where('building', '=', 'building')->get();
                        // return $searchType;
                    // }
                    // if (strpos($searchType, 'room')!== false) {
                    //      $searchType = Location::where('room', '=', 'room')->get();
                    //     return $searchType;

            //              ->orWhere('room', $searchTerms)
            // //                 ->orWhere('frequency_band', $searchTerms)
            // //                 ->orWhere( $searchType, $searchType)
            // //                 ->get();
                    //}

                //}

                #retreive all wireless Mics Collection and convert it to array.
            #retreive all wireless Mics Collection and convert it to array.

                //ddd($microphoneData);

                // if ($searchType = 'building' | $searchType = 'room'){
                //     foreach ($microphoneData as $microphone) {
                //    $building = $microphone->location->building;
                //    $room = $microphone->location->room;

                //    //ddd($room);
                //     }
                //  }
              //  }


            // $microphones = Microphone::all()->toArray();
            // #use php array_filter function to filter the microphones
            // $searchResults = array_filter($microphones, function ($microphone) use ($searchTerms, $searchType) {
            // return Str::contains( strtolower ( $microphone[$searchType] ), strtolower($searchTerms));

            // });


         //dump($searchResults);

            # Redirect back to the form with data/results stored in the session
        //    return redirect('home')->with([
        //         'searchTerms' => $searchTerms,
        //         'searchType' => $searchType,
        //         'searchResults' => $searchResults


        //     ]);



//         Machine::orderBy('created_at', 'desc')
// ->where('serial', 'LIKE', '%' . $search . '%')
// ->orWhere('type', 'LIKE', '%' . $search . '%')
// ->with('warranty')
// ->whereHas('warranty' , function($query) use ($search) {
//    $query->where('first_name', 'LIKE', '%' . $search . '%');
// })->get();


