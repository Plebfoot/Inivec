<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistCall extends Model
{
    use HasFactory;

    protected $fillable = [
        'occasion',
        'location',
        'act_type',
        'genre',
        'date',
        'comments',
        'budget',
        'contact_name',
        'contact_email',
        'contact_phone',
        'contact_preference',
    ];
}
