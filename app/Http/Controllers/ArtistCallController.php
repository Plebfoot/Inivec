<?php

namespace App\Http\Controllers;

use App\Models\FormEntry;
use Illuminate\Http\Request;

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
        // Haal de 'occasion' input op uit het request
        $occasion = $request->input('occasion');

        

        // Als de 'occasion' gelijk is aan 'Anders'
        if ($occasion === 'Anders') {
            // Haal dan de 'other_occasion' input op uit het request en sla deze op in de $occasion variabele
            $occasion = $request->input('other_occasion');
        }

       
        // Valideer de input data van het request
        $validatedData = $request->validate([
            'occasion' => 'required',
            'location' => 'required',
            'act_type' => 'required',
            'genre' => 'required',
            'event_date' => 'required',
            'budget' => 'required|numeric',
            'contact_name' => 'required',
            'contact_email' => 'required|email',
            'contact_phone' => 'required',
            'can_be_called' => 'required'
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
                'can_be_called.required' => 'Geef aan of er telefonisch contact opgenomen mag worden'
            ]);

          

        // Maak een nieuwe FormEntry instantie met de gevalideerde data en sla deze op in de database
        $formEntry = new FormEntry($validatedData);
        $formEntry->save();
        // Redirect naar de bedanktpagina
        return redirect()->route('artist_calls.thankyou');

    }

    /**
     * Display the specified resource.
     */
    public function show(FormEntry $formEntry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormEntry $formEntry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormEntry $formEntry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormEntry $formEntry)
    {
        //
    }
}