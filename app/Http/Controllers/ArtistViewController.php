<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\News;
use App\Models\Artist;
use App\Http\Controllers\Controller;

class ArtistViewController extends Controller{
    public function index() {
        $artist = Artist::inRandomOrder()->first();
        $event = Event::orderBy('event_date')->paginate(3);
        $news = News::orderBy('created_at')->paginate(3);

        return view('/pages/welcome',  ['artist' => $artist, 'event' => $event, 'news' => $news]);
    }

    public function artists() {
        return view('/pages/artiesten')->with('artists', Artist::paginate(5));
    }
}