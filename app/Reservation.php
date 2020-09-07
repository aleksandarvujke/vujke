<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function tretmans()
    {
    	return $this->hasMany(Tretmans::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
