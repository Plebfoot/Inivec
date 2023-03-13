<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index($username)
    {
        
        return view('home', compact('username'));

    }
}
