<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormEntry extends Model
{
    protected $fillable = [
        'occasion',
        'location',
        'act_type',
        'genre',
        'event_date',
        'comments',
        'budget',
        'contact_name',
        'contact_email',
        'contact_phone',
        'can_be_called',
        'delete_token'
   ];
}