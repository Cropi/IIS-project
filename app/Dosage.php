<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosage extends Model
{
    protected $table = "dosages";

    public function medicine()
    {
        return $this->belongsTo('App\Medicine');
    }

    public function treatment()
    {
        return $this->belongsTo('App\Treatment');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
