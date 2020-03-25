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

