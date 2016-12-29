<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeddingHall extends Model
{
    protected $table = 'wedding_halls';
    public $timestamps = false;
    protected $fillable = [
        'name', 'location',
    ];

    public function weddings()
    {
        return $this->hasMany('App\Wedding');
    }
}
