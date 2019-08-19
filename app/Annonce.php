<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Formation;
class Annonce extends Model
{
    protected $table = "annonces";
    protected $primaryKey = "id";
    //
    public function formation()
    {
        return $this->hasOne(Formation::class, 'id', 'formation_id');
    }
    public function reservation()
    {
        return $this->belongsTo(Reservation::class, 'user_id', 'id');
    }
}
