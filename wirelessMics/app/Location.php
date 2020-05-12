<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
         'building','room','city','state',
    ];

    public function microphones()
    {
        return $this->hasMany(Microphone::class);
    }
}

