<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function microphones()
    {
        return $this->belongsToMany(Microphone::class);
        // ->withTimestamps()
        // ->withPivot('microphone_tag');
    }

    	# Model events...
		# http://laravel.com/docs/eloquent#model-events
    public static function boot()
    {
        parent::boot();

		static::deleting(function($tag) {
		DB::statement('DELETE FROM microphone_tag WHERE tag_id = ?', array($tag->id));
		});
	}

		/**
		*
		* @return Array
		*/
    public static function getIdNamePair()
    {
		$tags = Array();
		$collection = Tag::all();
		foreach($collection as $tag) {
		$tags[$tag->id] = $tag->name;
			}
		return $tags;
	}
}
