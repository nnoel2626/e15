<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Microphone extends Model
{
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
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
