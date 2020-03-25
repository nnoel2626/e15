<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
    * GET the welcome page
    */
    public function welcome()
    {
        # Using the global `session` helper, we can extract our data that was
        # passed from `BookController@search` as part of the redirect
        $searchTerms = session('searchTerms', null);
        $searchType = session('searchType', null);
        $searchResults = session('searchResults', null);

        # Return the view, making the above data available for use in the video
        return view('pages.welcome')->with([
            'searchTerms' => $searchTerms,
            'searchType' => $searchType,
            'searchResults' => $searchResults
        ]);
    }
    /**
    * GET a about page
    */
    public function about()
    {
        return view('pages.about');
    } //

    /**
    * GET contact page
    */
    public function contact()
    {
        return view('pages.contact');
    } //


    /**
     * GET /support
     */
    public function support()
    {
        return view('pages.support');
    }
}
