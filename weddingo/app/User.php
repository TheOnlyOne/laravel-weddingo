<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone_number', 'permissions_level',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Wedding()
    {
        $weddings = $this->weddingManagers()->get();
        if(count($weddings) != 0)
        {
            $wedding = Wedding::find($weddings[0]->wedding_id);
            return $wedding;
        }
        return $weddings;
    }

    public function weddingManagers()
    {
        return $this->hasMany('App\WeddingManager', 'user_id', 'id');
    }

    public function buyingInvitationsHistory()
    {
        return $this->hasMany('App\BuyingInvitationsHistory', 'user_id', 'id');
    }

    public static function getByEmail($email)
    {
        $user = User::where('email', $email)->get();
        if(count($user) != 0)
            return $user[0];
        return $user;
    }
}
