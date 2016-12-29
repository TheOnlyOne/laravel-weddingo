<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PricingPackage extends Model
{
    protected $table = "pricing_packages";
    public $timestamps = false;
    protected $fillable = [
        'name', 'amount_orders', 'amount_pictures','price_per_1',
    ];

    public function buyingInvitationsHistory()
    {
        return $this->hasMany('App\BuyingInvitationsHistory');
    }
}
