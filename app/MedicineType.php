<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicineType extends Model
{
    protected $table = "medicine_types";

    public function medicine()
    {
        return $this->belongsTo('App\Medicine');
    }
}
