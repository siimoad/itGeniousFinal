<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $table = "formations";
    protected $primaryKey = "id";
    //
    public function annonce()
    {
        return $this->belongsTo(Annonce::class, 'formation_id', 'id');
    }
}
