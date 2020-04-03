<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Microphone extends Model
{
     # The guarded properties specifies which attributes should *not* be mass-assignable
    //protected $guarded = array('id','created_at', 'updated_at');

    protected $fillable = [
       'id', 'slug', 'building', 'room', 'make', 'model', 'band', 'frequency_range', 'serial_number', 'mic_type', 'group',
        'channel', 'assigned_frequency', 'comments'
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

     public function hasAnyTags($tags)
    {
        #check for multiple roles .if this curent user has any roles
        if ($this->tags()->whereIn('name', $tags)->first()) {
            return true;
        }

        return false;
    }


    public function hasTag($tag)
    {
        #check if this curent mic has a given tag in the Tag Table
        if ($this->tags()->where('tag_name', $tag)->first()) {
            return true;
        }

        return false;
    }

}
