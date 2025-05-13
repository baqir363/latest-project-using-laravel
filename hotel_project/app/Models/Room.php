<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    protected $fillable = [
        'room_title',
        'image',
        'desciption',
        'price',
        'wifi',
        'room_type',
    ];
}
