<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['fname', 'lname', 'body'];

    //  The fillable option allow the profile form to pass the data in the array above.

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
