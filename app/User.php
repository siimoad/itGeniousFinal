<?php

namespace App;
use Carbon;
use App\User;
use App\Reservation;
use App\Formation;
use App\Annonce;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "users";
    protected $primaryKey = "id";
    protected $fillable = [
        'name', 'email', 'password','date_naissance','sexe','ville','etablissement','niveau','tel'
    ];

    public static function generatePassword()
    {
      // Generate random string and encrypt it. 
      return bcrypt(str_random(35));
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function reservation()
    {
        return $this->belongsTo(Reservation::class, 'user_id', 'id');
    }
    public function getCountRegistered(){
        $registered = Reservation::with('user')->with('annonce')->where('reservations.id',$this->id)->groupBy('annonces.id');
        return $registered;
    }
}
