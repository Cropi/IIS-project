<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $table = "treatments";

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function animal()
    {
        return $this->belongsTo('App\Animal');
    }
}
