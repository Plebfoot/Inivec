<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
      'image_url'
    ];
    protected $table = 'artist_info';
}
