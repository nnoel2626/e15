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
         * GET / portable-list
         */
    public function portable(Request $request)
    {
        # Retrieve all $tags
        // $tags = Tag::all();

        #Retrieve all $microphones with at least one tag_name containing words installed
        $microphones = Microphone::whereHas('tags', function ($query) use($tags) {
         $query->where('name','Portable');
        })->orderBy('assigned_frequency')
         ->get();


        return view('microphones.portable')->with([
            // 'tags' => $tags,
            'microphones' => $microphones
        ]);
    }


        /**
         * GET /installed-list
         */
    public function installed(Request $request)
    {
        # Retrieve all $tags
        // $tags = Tag::all();

        #Retrieve all $microphones with at least one tag_name containing words installed
        $microphones = Microphone::with('tags')->whereHas('tags', function ($query) use($tags) {
        $query->where('name','Installed');
         })->orderBy('assigned_frequency')
         ->get();

        return view('microphones.installed')->with([
        //    'tags' => $tags,
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
        $microphones = Microphone::with('location')->get();
        # Alphabetize the microphones
        // $microphones = Arr::sort($microphoneData, function ($value) {
        //     return $value['slug'];
        // });

        return view('microphones.index')
        ->with('microphones', $microphones);

    }


    public function show( Microphone $microphone, $slug ) {

         $microphone = Microphone::where('slug', '=', $slug)->first();


        return view('microphones.show')->with([
            'microphone'=> $microphone,
            'slug' => $slug
            ]);
    }

}

