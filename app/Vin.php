<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vin extends Model
{
    protected $table = 'vin';
    protected $guarded = [];

    public function producteurs()
    {
        return $this->belongsToMany(Producteur::class);
    }
    
}
