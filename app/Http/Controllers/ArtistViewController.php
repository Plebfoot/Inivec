<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Artist;
use App\Http\Controllers\Controller;

class ArtistViewController extends Controller{
    public function index() {
        $artist = Artist::inRandomOrder()->first();
        return view('welcome',  ['artist' => $artist]);
    }
}