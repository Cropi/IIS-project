<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    //
    protected $table = "owners";

    protected $fillable = [
       'name'
    ];

    public function animals()
    {
        $this->hasMany('App\Animal', 'id');
    }
}
