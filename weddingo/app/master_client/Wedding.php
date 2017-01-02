<?php

namespace App\master_client;

use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    protected $table = "wedding";
    public $timestamps = false;
    protected $fillable = ["id", "name", "date"];

    public function getWeddingGuests() {
        return $this->hasMany('App\master_client\WeddingInvitation');
    }
}
