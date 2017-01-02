<?php

namespace App\master_client;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "wedding_invitations";
    protected $fillable = ["name", "email", "phone_number", "password", "permissions_level"];

    public function WeddingInvitationCategories() {
        return $this->hasMany('App\master_client\CategoryInvitation');
    }

    public function WeddingInvitationGuests() {
        return $this->hasMany('App\master_client\WeddingInvitation');
    }
}
