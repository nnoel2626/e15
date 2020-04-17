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
    # Routes to Manage User resources
    Route::resource('/users', 'UsersController', ['except' =>['show']]);
    Route::get('/users/profile', 'UsersController@profile')->name('users.profile');

    # Routes to Manage Microphone resources
    Route::get('/microphones', 'AdminMicsController@list')->name('mics.list');

    Route::resource('/microphones', 'AdminMicsController', [
          'only' => [ 'create', 'store', 'edit', 'update','destroy'],
         'names' => ['create' => 'mics.create','store' => 'mics.store',
                     'edit' => 'mics.edit','update' => 'mics.update',
                     'destroy' => 'mics.destroy' ]
    ]);

    # Routes to Manage Tag resources
    Route::resource('/tags', 'TagsController', [
     'only' => [ 'index','create', 'store', 'edit', 'update','destroy']
    ]);

    # Routes to Manage Role resources
    Route::resource('/roles', 'RolesController',
        ['only' =>['index','create','store', 'edit', 'update', 'destroy']
    ]);
    # Routes to Manage Role resources
    Route::resource('/locations', 'LocationsController',
        ['only' =>['index','create','store', 'edit', 'update', 'destroy']
    ]);

    });
