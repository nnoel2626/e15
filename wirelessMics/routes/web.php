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
    Route::get('/microphones', 'MicrophonesController@index');

    #Routes to display create and save new microphone
    Route::get('/microphones/create', 'MicrophonesController@create');
    Route::post('/microphones', 'MicrophonesController@store');

    #route to show a single Microphone
    Route::get('/microphones/{slug?}', 'MicrophonesController@show');

    #Routes to edit a single microphone and update that microphone
    Route::get('/microphones/edit/{slug?}', 'MicrophonesController@edit');
    Route::put('/microphones/update', 'MicrophonesController@update');

    #route to delete a Microphone
    Route::get('/equipment/delete/{slug?}', 'MicrophonesController@Destroy');

    #Route that searches Microphone by searchTerm and SearchType
    Route::get('/search', 'MicrophonesController@search');
    Route::get('/list', 'MicrophonesController@list');

 //});

#resources route for Admin
    Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
        Route::resource('/users', 'UsersController', ['except' =>['create','store','show']]);
    });
