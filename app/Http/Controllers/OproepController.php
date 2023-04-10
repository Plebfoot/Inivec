<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oproep;
class OproepController extends Controller
{
    public function index()
    {
      $oproep = Oproep::paginate(10);
       return view('users.calls', compact('oproep'), ['oproep' => $oproep]);
    }
}
