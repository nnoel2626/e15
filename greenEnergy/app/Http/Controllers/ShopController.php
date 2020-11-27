<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * GET /shop
     */
     public function productCategories()
    {
        return view('products.product_categories');
    }

      /**
     * GET /shop
     */
     public function products()
    {
        return view('products.products');
    }

      /**
     * GET /shop
     */
     public function productDetails()
    {
        return view('products.product_details');
    }


      /**
     * GET /shop
     */
     public function inverters()
    {
        return view('products.inverters');
    }

      /**
     * GET /shop
     */
     public function solarPanels()
    {
        return view('products.solar_panels');
    }

      /**
     * GET /shop
     */
     public function batteries()
    {
        return view('products.batteries');
    }

      /**
     * GET /shop
     */
     public function optimizers()
    {
        return view('products.optimizers');
    }
}
