<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function show(User $username)
    {
        $artist = Artist::where('name', $username->name)->first();

        return view('profiles.show', compact('username'), ['artist' => $artist ]);
    }

    public function boek(User $username) {
        $artist = Artist::where('name', $username->name)->first();

        return view('profiles.book', compact('username'), ['artist' => $artist ]);
    }
}