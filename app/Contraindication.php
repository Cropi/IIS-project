<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contraindication extends Model
{
    protected $table = "contraindications";

    public function medicine()
    {
        return $this->belongsTo('App\Medicine');
    }
}
