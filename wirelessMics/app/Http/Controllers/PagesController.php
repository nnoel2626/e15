<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application user dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        # Using the global `session` helper, we can extract our data that was
        # passed from `BookController@search` as part of the redirect
        $searchTerms = session('searchTerms', null);
        $searchType = session('searchType', null);
        $searchResults = session('searchResults', null);

        # Return the view, making the above data available for use in the video
        return view('pages.home')->with([
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
