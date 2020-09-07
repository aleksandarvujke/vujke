<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tretmans extends Model
{

	protected $guarded = [];

    public function reservations()
    {
    	return $this->hasOne(Reservation::class);
    }
}
