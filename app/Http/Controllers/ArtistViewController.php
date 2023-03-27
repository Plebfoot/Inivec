<?php

namespace App\Http\Controllers;

use App\Models\Event;
use DB;
use App\Models\Artist;
use App\Http\Controllers\Controller;

class ArtistViewController extends Controller{
    public function index() {
        $artist = Artist::inRandomOrder()->first();
        $event = Event::first();
        
        return view('/pages/welcome',  ['artist' => $artist, 'event' => $event ]);
    }

    public function artists() {
        return view('/pages/artiesten')->with('artists', Artist::paginate(5));
    }
}