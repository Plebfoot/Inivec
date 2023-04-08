<?php

namespace App\Http\Controllers;

use App\Models\ArtistCall;
use Illuminate\Http\Request;
use Greggilbert\Recaptcha\Facades\Recaptcha;

class ArtistCallController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valideer het ingediende formulier
        $validated = $request->validate([
            'occasion' => 'required',
            'location' => 'required',
            'act_type' => 'required',
            'genre' => 'required',
            'event_date' => 'required|date',
            'comments' => 'nullable',
            'budget' => 'nullable|numeric',
            'contact_name' => 'required',
            'contact_email' => 'required|email',
            'contact_phone' => 'required',
            'can_call' => 'required|boolean',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);
    
        // Maak een nieuw ArtistCall-model aan met de ingediende gegevens
        $artistCall = new ArtistCall;
        $artistCall->occasion = $validated['occasion'];
        $artistCall->location = $validated['location'];
        $artistCall->act_type = $validated['act_type'];
        $artistCall->genre = $validated['genre'];
        $artistCall->event_date = $validated['event_date'];
        $artistCall->comments = $validated['comments'];
        $artistCall->budget = $validated['budget'];
        $artistCall->contact_name = $validated['contact_name'];
        $artistCall->contact_email = $validated['contact_email'];
        $artistCall->contact_phone = $validated['contact_phone'];
        $artistCall->can_call = $validated['can_call'];
        $artistCall->save();
    
        // Redirect naar de pagina om de nieuwe ArtistCall weer te geven
        return redirect()->route('artist_calls.thankyou', $artistCall);
    }

    /**
     * Display the specified resource.
     */
    public function show(ArtistCall $artistCall)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ArtistCall $artistCall)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ArtistCall $artistCall)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ArtistCall $artistCall)
    {
        //
    }
}
