@extends('layouts.layout')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
<meta content="Inivec" property="og:title" />
<meta content="Maak je feest legendarisch met onze artiesten!" property="og:description" />
<meta content="https://www.inivec.nl" property="og:url" />
<meta content="#43B581" data-react-helmet="true" name="theme-color" />

@section('content')
    <div class="form" style="max-width: 60vw; margin: auto;">

        <form id='oproepForm' method="POST" action="{{ route('artist_calls.store') }}" novalidate>
            @csrf
            <div id="text" style="margin:auto;padding-top: 50px; margin-bottom:50px;">
                <h1 style="text-align:center;">Plaats een oproep voor de artiesten van Inivec</h1>
                <hr>
                <p style="text-align:center;">Plaats gratis een oproep bij Inivec en wij sturen jouw verzoek door naar
                    zorgvuldig geselecteerde artiesten uit onze uitgebreide database. Binnen 24 uur laten de artiesten
                    weten of ze beschikbaar zijn voor jouw evenement. Zo heb je snel en gemakkelijk toegang tot een
                    groot aantal getalenteerde artiesten en kun je zelf kiezen met wie je contact opneemt. Maak gebruik
                    van onze oproepdienst en vind binnen no-time de perfecte artiest voor jouw evenement!</p>
            </div>

            <div class="form-row text-left" style="display:block">
                <h4>Contactpersoon gegevens</h4>
                <small id="persoonsInfoHelp" class="form-text text-muted">We zullen uw gegevens nooit met iemand anders
                    delen.</small>
                <hr>
            </div>
            <div class="form-row" style="margin-bottom:100px">
                <div class="form-group col-md-4">
                    <label for="contact_name">Naam contactpersoon: <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('contact_name') is-invalid @enderror" id="contact_name"
                        name="contact_name" value="{{ old('contact_name') }}" required>
                    @error('contact_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-2">
                    <label for="contact_infix">Tussenvoegsel:</label>
                    <input type="text" class="form-control @error('contact_infix') is-invalid @enderror" id="contact_infix"
                        name="contact_infix" value="{{ old('contact_infix') }}">
                    @error('contact_infix')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="contact_lastname">Achternaam: <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('contact_lastname') is-invalid @enderror" id="contact_lastname"
                    name="contact_lastname" value="{{ old('contact_lastname') }}">
                @error('contact_lastname')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="contact_email">Email contactpersoon: <span class="text-danger">*</span></label>
                    <input type="email" class="form-control @error('contact_email') is-invalid @enderror"
                        id="contact_email" name="contact_email" value="{{ old('contact_email') }}" required>
                    @error('contact_email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="contact_phone">Telefoonnummer: <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control @error('contact_phone') is-invalid @enderror"
                        id="contact_phone" name="contact_phone" value="{{ old('contact_phone') }}" required>
                    @error('contact_phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row text-left" style="display:block">
                <h4>Evenement gegevens</h4>
                <hr>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="occasion">Gelegenheid: <span class="text-danger">*</span></label>
                    <select class="form-control @error('occasion') is-invalid @enderror" id="occasion" name="occasion"
                        required>
                        <option value="" selected disabled>Kies een gelegenheid</option>
                        <option value="Bruiloft" {{ old('occasion') == 'Bruiloft' ? 'selected' : '' }}>Bruiloft</option>
                        <option value="Bedrijfsfeest" {{ old('occasion') == 'Bedrijfsfeest' ? 'selected' : '' }}>
                            Bedrijfsfeest
                        </option>
                        <option value="Privé feest" {{ old('occasion') == 'Privé feest' ? 'selected' : '' }}>Privé feest
                        </option>
                        <option value="Kroeg" {{ old('occasion') == 'Kroeg' ? 'selected' : '' }}>Kroeg</option>
                        <option value="Festival" {{ old('occasion') == 'Festival' ? 'selected' : '' }}>Festival</option>
                        <option value="Receptie" {{ old('occasion') == 'Receptie' ? 'selected' : '' }}>Receptie</option>
                        <option value="Club" {{ old('occasion') == 'Club' ? 'selected' : '' }}>Club</option>
                        <option value="Kerst & Nieuwjaar" {{ old('occasion') == 'Kerst & Nieuwjaar' ? 'selected' : '' }}>
                            Kerst &
                            Nieuwjaar</option>
                        <option value="Anders" {{ old('occasion') == 'Anders' ? 'selected' : '' }}>Anders</option>
                    </select>
                    <div id="other-occasion" style="display: none;">
                        <input type="text" class="form-control mt-2" id="other-occasion-input" name="other_occasion"
                            placeholder="Anders, vul hier in">
                    </div>
                    @error('occasion')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="act_type">Type act: <span class="text-danger">*</span></label>
                    <select class="form-control @error('act_type') is-invalid @enderror" id="act_type" name="act_type"
                        required>
                        <option value="" selected disabled>Kies een optie</option>
                        <option value="DJ" {{ old('act_type') == 'DJ' ? 'selected' : '' }}>DJ</option>
                        <option value="Band" {{ old('act_type') == 'Band' ? 'selected' : '' }}>Band</option>
                        <option value="Solo" {{ old('act_type') == 'Solo' ? 'selected' : '' }}>Solo</option>
                        <option value="Ensemble" {{ old('act_type') == 'Ensemble' ? 'selected' : '' }}>Ensemble</option>
                    </select>
                    @error('act_type')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
                <div class="form-group">
                    <label for="genre">Genre: <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre"
                        name="genre" value="{{ old('genre') }}" required placeholder="Vul hier de genre in.">
                        @error('genre')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="location">Locatie: <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('location') is-invalid @enderror" id="location"
                            name="location" value="{{ old('location') }}" required
                            placeholder="Vul hier de locatie in.">
                        @error('location')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="budget">Budget: <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">&euro;</span>
                            </div>
                            <input type="number" step="0.01"
                                class="form-control @error('budget') is-invalid @enderror" id="budget" name="budget"
                                value="{{ old('budget') }}" placeholder="Vul hier je budget in">
                        </div>
                        @error('budget')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-2">
                        <label for="event_date">Gewenste Datum: <span class="text-danger">*</span></label>
                        <input type="date" class="form-control @error('event_date') is-invalid @enderror"
                            id="event_date" name="event_date" value="{{ old('event_date') }}" required
                            placeholder="Vul hier de datum van het evenement in.">
                        @error('event_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="comments">Opmerkingen:</label>
                    <textarea rows='5' class="form-control @error('comments') is-invalid @enderror" id="comments" name="comments"
                        placeholder="Omschrijf het evenement. Wat zijn de tijden? Welke benodigdheden heb je nodig?">{{ old('comments') }}</textarea>
                    @error('comments')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-4">

                    <div class="form-check">
                        <label for="can_be_called">Kan de artiest bellen: <span class="text-danger">*</span></label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="can_be_called" id="1"
                                value="1" @if (old('can_be_called') == '1') checked @endif required>
                            <label class="form-check-label" for="can_call_yes">Ja</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="can_be_called" id="can_call_no"
                                value="0" @if (old('can_be_called') == '0') checked @endif required>
                            <label class="form-check-label" for="can_call_no">Nee</label>
                        </div>
                        @error('can_be_called')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">Verzenden</button>
            <br>
            <p style="font-size: 14px;">Door te verzenden ga je akkoord met de <a href="#">algemene voorwaarden</a>.
            </p>
        </form>
    </div>
@endsection
