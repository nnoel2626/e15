<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Tag;
use App\Microphone;
use Gate;
use Arr;
use Str;

class MicrophonesController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }


     public function search(Request $request)
    {
        //ddd($request->all());

        // $request->validate([
        //     'searchTerms' => 'required',
        //     'searchType' => 'required',
        // ]);

        # Note: if validation fails, it will redirect
        # back to `/` (page from which the form was submitted)

        # Start with an empty array of search results; microphones that
        # match our search query will get added to this array
        $searchResults = [];

        # Get the input values (default to null if no values exist)
        $searchTerms = $request->input('searchTerms', null);
        $searchType = $request->input('searchType', null);
        //dd($searchTerms);
        //dd($searchType);
        # Load our book data using PHP's file_get_contents
        # We specify our microphones.json file path using Laravel's database_path helper

        $microphoneData = Microphone::all();
        //ddd($microphoneData);
        # Convert the string of JSON text we loaded from microphones.json into an
        # array using PHP's built-in json_decode function
        $microphones = json_decode($microphoneData, true);
           // ddd($microphones);
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


        # The above array_filter accomplishes the same thing this for loop would
        foreach ($microphones as $slug => $microphone) {
            if (strtolower($microphone[$searchType]) == strtolower($searchTerms)) {
                $searchResults[$slug] = $microphone;
            }
        }
         //ddd($searchResults);
        # Redirect back to the form with data/results stored in the session
        # Ref: https://laravel.com/docs/redirects#redirecting-with-flashed-session-data
        return redirect('home')->with([
            'searchTerms' => $searchTerms,
            'searchType' => $searchType,
            'searchResults' => $searchResults
        ]);
      }

        /**
         * GET /list
         */
    public function installed()
    {
        return view('microphones.installed');
    }
        /**
         * GET /list
         */
    public function portable()
    {
        return view('microphones.portable');
    }

      /**
     * GET /microphones
     * Show all the microphones in the library
     */
    public function index()
    {

        #eager loading to reduce the number of queries
        $microphones = Microphone::all();


        # Alphabetize the microphones
        $microphones = Arr::sort($microphones, function ($value) {
            return $value['building'];
        });

        return view('microphones.index')
        ->with('microphones', $microphones);

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
