<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = "reservations";
    protected $primaryKey = "id";
    //
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function annonce()
    {
        return $this->hasOne(Annonce::class, 'id', 'annonce_id');
    }
}
