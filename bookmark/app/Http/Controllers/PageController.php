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
        return view('page.welcome');
    }

    /**
    * GET a about page
    */
    public function about()
    {
        return view('page.about');
    } //

    /**
    * GET contact page
    */
    public function contact()
    {
        return view('page.contact');
    } //
}
