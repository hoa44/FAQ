<?php

namespace App;

use AbstractEverything\Poll\Extras\PollUser;
use AbstractEverything\Poll\Extras\PollUserInterface;
use AbstractEverything\Poll\Models\Poll;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements PollUserInterface
{
    use Notifiable;
    use PollUser;

    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password','type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Profile()
    {
        return $this->hasOne('App\Profile');
    }

    public function questions()
    {
        return $this->hasMany('App\Question');
    }

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }

    public function isAdmin()
    {
        return $this->type === self::ADMIN_TYPE;
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hasVoted(Poll $poll)
    {
        // TODO: Implement hasVoted() method.
        //return $this->hasMany('App\Poll');
        //if (auth()->user()->hasVoted($poll))
           // echo 'User has voted';
    }
}
