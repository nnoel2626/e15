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
    // public function __construct()
    // {
    //     $this->middleware('guess');
    // }

    /**
     * Show the application user dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home');
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
     * GET /shop
     */
     public function shop()
    {
        return view('pages.shop');
    }
    /**
     * GET /blog
     */
     public function blog()
    {
        return view('pages.blog');
    }
    /**
     * GET /appointment
     */
     public function appointment()
    {
        return view('pages.appointment');
    }




}
