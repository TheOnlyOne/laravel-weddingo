<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeddingManager extends Model
{
    protected $table = 'wedding_managers';
    public $timestamps = false;
    protected $fillable = [
        'user_id', 'wedding_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function wedding()
    {
        return $this->belongsTo('App\Wedding');
    }
}
