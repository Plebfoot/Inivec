<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = [
        'username',
        'eventname',
        'event_date',
        'event_till',
        'event_img',
        'bio',
        'price'
    ];
}
