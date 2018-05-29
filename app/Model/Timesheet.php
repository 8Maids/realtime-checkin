<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    public function user()
    {
    	$this->belongsTo(User::class);
    }

    public function booking()
    {
    	$this->hasMany(Booking::class);
    }
}
