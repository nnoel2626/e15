<?php

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
# To disable Auth feature
//Auth::routes(['register' => false]);.

//->middleware(['guest'])
#landing Page  Route
Route::get('/', function () {
    return view('welcome');
});

    #All the auth routes
    Auth::routes();

    //Route::group(['middleware' => ['auth']], function() {

    # Misc. Pages Routes
    Route::get('/home', 'PagesController@index')->name('home');
    Route::get('/about', 'PagesController@about')->name('about');
    Route::get('/support', 'PagesController@support')->name('support');

 # Microphones Routes
    #Route to display all Microphones
    Route::get('/microphones', 'MicrophonesController@index')->name('index');

    #route to show a single Microphone
    Route::get('/microphones/{slug?}', 'MicrophonesController@show')->name('show');

    #Route that searches Microphone by searchTerm and SearchType
    Route::get('/search', 'MicrophonesController@search')->name('search');
    Route::get('/installed', 'MicrophonesController@installed')->name('installed');
    Route::get('/portable', 'MicrophonesController@portable')->name('portable');

 //});

#resources route for Admin
    Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {

        Route::resource('/users', 'UsersController', ['except' =>['create','store','show']]);

         #Routes to display microphone List
       Route::get('/microphones', 'AdminMicsController@list')->name('mics.list');


         Route::resource('/microphones', 'AdminMicsController', [
             'only' => [ 'create', 'store', 'edit', 'update', 'destroy'],
           'names' => [

                'create' => 'mics.create',
                'store' => 'mics.store',
                'edit' => 'mics.edit',
                'update' => 'mics.update',
                'destroy' => 'mics.destroy'

                 ]
            ]);
    });
