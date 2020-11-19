<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producteur extends Model
{
    protected $table = 'producteur';
    protected $guarded = [];

    public function vins()
    {
        return $this->belongsToMany(Vin::class);
    }

}
