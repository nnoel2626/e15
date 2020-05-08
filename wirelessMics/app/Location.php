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

#retrieve method
// $phone = User::find(1)->phone;
// dd($phone);
// $user = Phone::find(1)->user;
// dd($user);

#create method
// $user = User::find(1);
// $phone = new Phone;
// $phone->phone = '9429343852';

// $user->phone()->save($phone);

#read Method
// $phone = Phone::find(1);
// $user = User::find(10);

// $phone->user()->associate($user)->save();
