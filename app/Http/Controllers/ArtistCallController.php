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
        $validated = $request->validate([
            'occasion' => 'required',
            'location' => 'required',
            'act_type' => 'required',
            'genre' => 'required',
            'event_date' => 'required|date',
            'comments' => 'nullable',
            'budget' => 'nullable|numeric|required',
            'contact_name' => 'required',
            'contact_email' => 'required|email',
            'contact_phone' => 'required',
            'can_call' => 'required|boolean',
        ], [
            'occasion.required' => 'Kies een gelegenheid',
            'location.required' => 'Selecteer een locatie',
            'act_type.required' => 'Selecteer een type act',
            'genre.required' => 'Selecteer een genre',
            'event_date.required' => 'Selecteer een datum',
            'budget.required' => 'Voer een budget in',
            'budget.numeric' => 'Het budget moet een getal zijn',
            'contact_name.required' => 'Voer een contactpersoon in',
            'contact_email.required' => 'Voer een e-mailadres in',
            'contact_email.email' => 'Voer een geldig e-mailadres in',
            'contact_phone.required' => 'Voer een telefoonnummer in',
            'can_call.required' => 'Geef aan of er telefonisch contact opgenomen mag worden',
        ]);

        dd($validated);
    
        $artistCall = ArtistCall::create($validated);
    
        if ($request->has('other_occasion') && $request->other_occasion !== "") {
            $artistCall->other_occasion = $request->other_occasion;
            $artistCall->save();
        }
    
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
