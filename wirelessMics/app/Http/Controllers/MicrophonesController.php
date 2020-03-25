<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Tag;
use Gate;
use Arr;
use Str;

class MicrophonesController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
      /**
     * GET /microphones
     * Show all the microphones in the library
     */
    public function index()
    {
        $microphones = Microphone::all();

        ddd($microphones);
        # Alphabetize the microphones
        // $microphones = Arr::sort($microphones, function ($value) {
        //     return $value['building'];
        // });

        // return view('microphones.index')->with([
        //     'microphones' => $microphones
        // ]);
    }

    /**
    * GET /microphones/create
    * Display the form to add a new book
    */
    public function create(Request $request)
    {
        return view('microphones.create');
    }


    /**
    * POST /microphones
    * Process the form for adding a new book
    */
    public function store(Request $request)
    {
        # Validate the request data
        # The `$request->validate` method takes an array of data
        # where the keys are form inputs
        # and the values are validation rules to apply to those inputs
        // $request->validate([
        // 'slug' => 'required',
        // 'building'=> 'required',
        // 'room'=> 'required',
        // 'make'=> 'required',
        // 'model'=> 'required',
        // 'band'=> 'required',
        // 'frequency_range'=> 'required',
        // 'serial_number'=> '',
        // 'mic_type'=> 'required',
        // 'group'=> 'required',
        // 'channel'=> 'required',
        // 'Assigned_frequency'=> '589.725 MHZ',
        // 'comments'=> 'required|min:255'

        // 'title' => 'required',
        // 'author' => 'required',
        // 'published_year' => 'required|digits:4',
        // 'cover_url' => 'url',
        // 'cover_url' => 'url',
        // 'purchase_url' => 'required|url',
        // 'description' => 'required|min:255'
        //]);

        # Note: If validation fails, it will automatically redirect the visitor back to the form page
        # and none of the code that follows will execute.

        # Code will eventually go here to add the book to the database,
        # but for now we'll just dump the form data to the page for proof of concept
        dump($request->all());
    }

    public function search(Request $request)
    {
        //sdd($request->all());

        $request->validate([
            'searchTerms' => 'required',
            'searchType' => 'required',
        ]);

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
        $microphones = App\Microphone::all();

        // ddd($microphones);
        # Convert the string of JSON text we loaded from microphones.json into an
        # array using PHP's built-in json_decode function
        //$microphones = json_decode($bookData, true);

        # This algorithm will filter our $microphones down to just the microphones where either
        # the title or author ($searchType) matches the keywords the user entered ($searchTerms)
        # The search values are convereted to lower case using PHP's built in strtolower function
        # so that the search is case insensitive
        $searchResults = array_filter($microphones, function ($microphone) use ($searchTerms, $searchType) {
            return Str::contains(strtolower($microphone[$searchType]), strtolower($searchTerms));
        });
        dd($searchResults);

        # The above array_filter accomplishes the same thing this for loop would
        // foreach ($microphones as $slug => $microphone) {
        //     if (strtolower($microphone[$searchType]) == strtolower($searchTerms)) {
        //         $searchResults[$slug] = $microphone;
        //     }
        // }

        # Redirect back to the form with data/results stored in the session
        # Ref: https://laravel.com/docs/redirects#redirecting-with-flashed-session-data
        return redirect('/')->with([
            'searchTerms' => $searchTerms,
            'searchType' => $searchType,
            'searchResults' => $searchResults
        ]);
    }


    /**
     * GET /list
     */
    public function list()
    {
        return view('microphones.list');
    }



    /**
     * GET /book/{slug}
     * Show the details for an individual book
     */
    public function show($slug)
     {
    //     $microphone = Arr::first($microphones, function ($value, $key) use ($slug) {
    //         return $key == $slug;
    //     });

    //     return view('microphones.show')->with([
    //         'microphone' => $microphone,
    //         'slug' => $slug,
    //     ]);
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
}

