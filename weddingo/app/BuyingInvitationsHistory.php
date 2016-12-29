<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyingInvitationsHistory extends Model
{
    protected $table = "buying_invitations_history";
    protected $fillable = [
        'user_id', 'wedding_id', 'date', 'invitations_package_id', 'amount', 'total_price', 'is_deleted',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function wedding()
    {
        return $this->belongsTo('App\Wedding');
    }

    public function pricingPackage()
    {
        return $this->belongsTo('App\PricingPackage');
    }
}
