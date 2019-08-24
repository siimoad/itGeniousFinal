<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Annonce;
use App\Reservation;
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
    public function countReservation(){

        $registered = Reservation::with('user')->with('annonce')->where('reservations.id',$this->id)->groupBy('annonces.id');
        return $registered;
    }
}
