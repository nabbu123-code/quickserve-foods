<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'reservation_date',
        'reservation_time',
        'guests'
    ];
}
