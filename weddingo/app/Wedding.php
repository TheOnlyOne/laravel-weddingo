<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Wedding extends Model
{
    protected $table = 'weddings';
    public $timestamps = false;
    protected $fillable = [
        'groom_name', 'bride_name', 'date', 'wedding_hall_id', 'template_id',
    ];

    public function weddingHall()
    {
        return $this->belongsTo('App\WeddingHall');
    }

    public function weddingManagers()
    {
        return $this->hasMany('App\WeddingManager');
    }

    public function buyingInvitationsHistory()
    {
        return $this->hasMany('App\BuyingInvitationsHistory');
    }
}
