<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    public function user()
    {
    	$this->belongsTo(User::class);
    }

    public function timesheets()
    {
    	$this->belongsTo(Timesheet::class);
    }
}
