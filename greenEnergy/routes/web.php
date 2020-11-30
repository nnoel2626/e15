<?php

use Illuminate\Support\Facades\Route;
use Stichoza\GoogleTranslate\GoogleTranslate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 #test route to check Database connection
    Route::get('/debug', function () {

    $debug = [
        'Environment' => App::environment(),
    ];
            /*
            The following commented out line will print your MySQL credentials.
            Uncomment this line only if you're facing difficulties connecting to the
            database and you need to confirm your credentials. When you're done
            debugging, comment it back out so you don't accidentally leave it
            running on your production server, making your credentials public.
            */
    $debug['MySQL connection config'] = config('database.connections.mysql');

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
        } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
        }

            dump($debug);
    });




    //Route::redirect('/', '/en');

    // Route::group([
    //     'prefix' => '{locale}',
    // ], function () {

    Route::get('/',function () {
        return view('welcome');
        });

    route::get('locale/{locale}', function ($locale){

        Session::put('locale', $locale);
        return redirect()->back();

        });

# Misc. Pages Routes
    Route::get('/pages/home', 'PagesController@index')->name('home');
    Route::get('/pages/about', 'PagesController@about')->name('about');
    Route::get('/pages/service', 'PagesController@service')->name('service');
    Route::get('/pages/contact', 'PagesController@contact')->name('contact');
    Route::get('/pages/portfolio', 'PagesController@portfolio')->name('portfolio');
    Route::get('/pages/appointment', 'PagesController@appointment')->name('appointment');
    Route::get('/pages/support', 'PagesController@support')->name('support');
    Route::get('/pages/terms_of_service', 'PagesController@termsOfService')->name('termsOfService');
    Route::get('/pages/privacy_policy', 'PagesController@privacyPolicy')->name('privacyPolicy');


    # Products for shop Routes
    Route::get('/products/product_categories', 'ShopController@productCategories')->name('productCategories');
    Route::get('/products/products', 'ShopController@products')->name('products');
    Route::get('/products/product_details', 'ShopController@productDetails')->name('productDetails');
    Route::get('/products/inverters', 'ShopController@inverters')->name('inverters');
    Route::get('/products/batteries', 'ShopController@batteries')->name('batteries');
    Route::get('/products/solar_panels', 'ShopController@solarPanels')->name('solarPanels');
    Route::get('/products/optimizers', 'ShopController@optimizers')->name('optimizers');

         //});

        Route::group([
            'middleware'    => '', // Removing this made everything work
            'as'            => 'admin.',
            'prefix'        => 'admin',
            'namespace'     => 'Admin',
        ],function(){

        });

    #All Login and registration routes
    Auth::routes();

    //Route::get('/home', 'HomeController@index')->name('home');
    Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function ()
    {
    # Show the page to confirm deletion of a user
    Route::get('/users/{user}/delete', 'UsersController@delete')->name('users.delete');
    # Routes to Manage User resources

    // Route::get('/users/profile', 'UsersController@profile')->name('users.profile');
    Route::resource('/users', 'UsersController', ['except' =>['create','store','show']]);

    });



// Route::get('lang/{locale}', function ($locale) {
// session()->put('locale', $locale);
// //return redirect()->back('welcome');
// return view('welcome');
// });



// Route::group(['prefix' => '{language}'], function () {
//     Route::get('/', function () {
//         return view('welcome');
//     });

//     Auth::routes();
//     Route::get('/home', 'HomeController@index')->name('home');
// });


    //     $tr = new GoogleTranslate('fr'); // Translates into french
//  return $tr->translate('welcome');
// return view('welcome');


// Route::get('/test', function () {
//         App::setLocale('es');
//        dd(App::getLocale());
// });



    // Route::get('welcome/{locale}', function ($locale) {
//     if (! in_array($locale, ['en', 'es', 'fr'])) {
//         abort(400);
//     }

//     App::setLocale($locale);

//     //
// });
