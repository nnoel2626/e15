<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// /use Illuminate\Auth\AuthServiceProvider;

class PagesController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guess');
    // }



 /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }



    /**
     * Show the application user dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('welcome');
    }
    /**
    * GET a about page
    */
    public function about()
    {
        return view('pages.about');
    }
      /**
     * GET /service
     */
     public function service()
    {
        return view('pages.service');
    }
    /**
    * GET contact page
    */
    public function contact()
    {
        return view('pages.contact');
    }
    /**
    * GET portfolio page
    */
    public function portfolio()
    {
        return view('pages.portfolio');
    }

    /**
     * GET /support
     */
    public function support()
    {
        return view('pages.support');
    }

    /**
     * GET /blog
     */
     public function privacyPolicy()
    {
        return view('pages.privacy_policy');
    }

    /**
     * GET /blog
     */
     public function technicalSupport()
    {
        return view('pages.technical_support');
    }

     /**
     * GET /blog
     */
     public function termsOfService()
    {
        return view('pages.terms_of_service');
    }

    /**
     * GET /appointment
     */
     public function appointment()
    {
        return view('pages.appointment');
    }




}
