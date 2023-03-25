<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Artist;
use App\Http\Controllers\Controller;

class ArtistViewController extends Controller{
    public function index() {
        $artist = Artist::inRandomOrder()->first();
        return view('/pages/welcome',  ['artist' => $artist]);
    }

    public function artists() {
        return view('/pages/artiesten')->with('artists', Artist::paginate(5));
    }
}