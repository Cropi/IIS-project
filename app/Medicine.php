<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $table = "medicines";

    public function dosages()
    {
        return $this->hasMany('App\Dosage');
    }
}
