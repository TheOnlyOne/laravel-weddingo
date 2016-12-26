<?php

namespace App\master_client;

use Illuminate\Database\Eloquent\Model;

class WeddingInvitation extends Model
{
    protected $table = "wedding_invitations";
    // TODO: change wedding_id to be the wedding_id specified by the correct model
    // TODO: change category_id to be the category_id specified by the correct model
    public $timestamps = false;
    protected $fillable = ["name", "phone_number", "guests_num", "is_coming", 3];
}
