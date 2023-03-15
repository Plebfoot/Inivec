<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ProfilesController;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index($username)
    {
        return view('profiles.show', compact('username'));
    }
}