

.skin-blue .main-header .navbar {
    background-color: #3c8dbc;
}

#Original locations Table
 Schema::create('locations', function (Blueprint $table) {
          $table->id();
            $table->bigInteger('microphone_id')->unsigned();
           $table->string('building');
           $table->string('street_address');
           $table->string('room');
           $table->string('city');
           $table->string('state');
           $table->string('postal_code');
           $table->timestamps();
           $table->foreign('microphone_id')->references('id')
             ->on('microphones')
         ->onDelete('cascade');
        });



<?php
//useCarbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Equipment extends Eloquent {

    # The guarded properties specifies which attributes should *not* be mass-assignable
    protected $guarded = array('id','created_at', 'updated_at');

    // use SoftDeletingTrait;

    // protected $dates = ['deleted_at'];

    /**
    * Equipment belong to many categories
    */
    public function categories() {
    return $this->belongsToMany('Category');
    }


    //public function users() {
    //return $this->belongsTo('User');
    //}

    //public function scopeRecent($query);
    //}
        //return $query()where('created_at', '>=',Carbon\Carbon::now->subWeek());
    //}

    /**
    * This array will compare an array of given categories with existing categories
    * and figure out which ones need to be added and which ones need to be deleted
    */
    public function updateCategories($new = array()) {
        // Go through new categories to see what ones need to be added
    foreach($new as $category) {
    if(!$this->categories->contains($category)) {
    $this->categories()->save(Category::find($category));
    }
    }
    // Go through existing categories and see which ones need to be deleted
    foreach($this->categories as $category) {
    if(!in_array($category->pivot->category_id,$new)) {
    $this->categories()->detach($category->id);
    }
    }
    }


    public static function search($query) {
        # If there is a query, search the library with that query
    if($query) {
        # Eager load categories
    $quipment = Equipment::with('categories')
    ->whereHas(function($q) use($query) {
    $q->where('name', 'LIKE', "%$query%");
    })
    ->orWhereHas('categories', function($q) use($query) {
    $q->where('name', 'LIKE', "%$query%");
    })
    ->orWhere('brand', 'LIKE', "%$query%")
    ->orWhere( 'LIKE', "%$query%")
    ->get();
        # Note on what `use` means above:
        # Closures may inherit variables from the parent scope.
        # Any such variables must be passed to the `use` language construct.
    }
        # Otherwise, just fetch all Equipments
    else {
        # Eager load categories
    $equipment = Equipment::with('categories')->get();
    }
    return $equipment;

    }
    /**
    * Searches and returns any equipment added in the last 24 hours
    *
    * @return Collection
    */


    public static function getEquipmentsAddedInTheLast24Hours() {
        # Timestamp of 24 hours ago
    $past_24_hours = strtotime('-1 day');
        # Convert to MySQL timestamp
    $past_24_hours = date('Y-m-d H:i:s', $past_24_hours);
    $equipment = Equipment::where('created_at','>',$past_24_hours)->get();
    return $equipment;
    }


    public static function scoperecent() {

        $equipment = Equipment::groupBy('day')->get([
        DB::raw('Date(created_at) as day')
        //DB::raw('count(*) as as equipment_count')
        ]);
        return $equipment;
    }
    /**
    *
    *
    * @return String
    */
// public static function sendDigests($users,$equipment) {
// $recipients = '';
// $data['equipment'] = $equipment;
// foreach($users as $user) {
// $data['user'] = $user;

// Mail::send('emails.digest', $data, function($message) {
// $recipient_email = $user->email;
// $recipient_name = $user->first_name.' '.$user->last_name;
// $subject = 'equipment Digest';
// $message->to($recipient_email, $recipient_name)->subject($subject);
// });

// $recipients .= $user->email.', ';
// }
// $recipients = rtrim($recipients, ',');
// return $recipients;
// }




            // class PostsController extends \BaseController
            // {
            // public function getIndex(){
            // $posts = Post::with('user')->get();
            // return View::make('posts.index', compact('posts'));
            // }
            // public function getpost($id){
            // $post = Post::with('user')->find($id);
            // return View::make('posts.post', compact('post'));
            // }
            // }


}

//ddd( $microphones);

        // $users = User::all();
        // foreach($microphones as $microphone)
        // {
        // {{$microphone->name}}

        // foreach($microphone->tags as $tag)
        // {
        // {{$tag->name}}
        // }
        // }
 // ddd($microphones);
        // $tags = array();
        // foreach(Tag::all() as $tag){

        // $tags[$tag->id] = $tag->name;
        // }

# First get a book to delete
// $book = Book::where('author', '=', 'F. Scott Fitzgerald')->first();

// if (!$book) {
//     dump('Did not delete- Book not found.');
// } else {
//     $book->delete();
//     dump('Deletion complete; check the database to see if it worked...');
// }

//   $validator = Validator::make($request->all(), [
        //     'title' => 'required|unique:posts|max:255',
        //     'body' => 'required',
        // ]);

    //     if ($validator->fails()) {
    //         return redirect('admin/microphones/create')
    //                     ->withErrors($validator)
    //                     ->withInput();
    //     }


//     $articles = Article::whereHas('tags', function($query) use ($tagName) {
//   $query->whereName($tagName);
// })->get();


             //ddd($microphone);
            // try {
			// 	$microphone = Equipment::findOrFail($microphone);
			// 	}
			// 	catch(Exception $e)
			// 	{
			// 	return Redirect::to('/admin.equipment.index')
			// 	->with('flash_message', 'Equipment not found');
			// 	}
			// # Pass with the $Category object so we can do model binding on the form
			// return View('/admin.equipment.edit', compact('equipment'));
        //ddd($microphone);
        //dump($request->all());


         // if($validator->fails()) {
        //     return redirect('admin/microphones/create')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
//    $request->session()->flash('success', $microphone->slug . ' ' . 'microphone has been updated');
//         } else {
//             $request->session()->flash('error', 'There was an error updating the microphone');
//         }


//   if (!$microphone) {

//          $request->session()->flash('error', 'Error deleting the microphone.Microphone not found.');
//         } else {

//             $microphone->delete();
//             $request->session()->flash('success', $microphone->slug . ' ' . 'microphone has been deleted');
//         }


// public function getDelete($id) {
//           #return'form for deletion';
//          try {
//         $equipment = Equipment::findOrFail($id);
//         }
//          catch(Exception $e) {
//         return Redirect::to('/equipment/index')
//          ->with('flash_message', 'Equipment not found');
//          }
//              return View::make('/equipment/delete')
//             ->with('equipment', $equipment);

//         }


//         public function postDelete() {

//         try {
//             $equipment = Equipment::findOrFail(Input::get('id'));
//         }
//         catch(exception $e) {
//             return Redirect::to('/equipment/index')
//             ->with('flash_message', 'Could not delete Equipment - not found.');
//         }

//         Equipment::destroy(Input::get('id'));

//         return Redirect::to('/equipment/index')
//         ->with('flash_message', 'Equipment deleted.');

//     }
