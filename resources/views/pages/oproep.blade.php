@extends('layouts.layout')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
<meta content="Inivec" property="og:title" />
<meta content="Maak je feest legendarisch met onze artiesten!" property="og:description" />
<meta content="https://www.inivec.nl" property="og:url" />
<meta content="#43B581" data-react-helmet="true" name="theme-color" />

@section('content')
    <!-- Navbar sectie -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid justify-content-between">
            <a class="navbar-brand" href="/">
                <span>Inivec</span>
            </a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bx bx-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" aria-current="page" href="#">Over Ons</a>
                    <a class="nav-link" href="/artiesten">Artiesten</a>
                    <a class="nav-link" href="/inschrijven">Inschrijven</a>
                </div>
                @if (Auth::check())
                    <a href="/home" class="btn btn-primary shadow-none">Dashboard</a>
                @else
                    <a href="/login" class="btn btn-primary shadow-none">Login</a>
                @endif
            </div>
        </div>
    </nav>

    <div class="form">
        <form id='oproepForm' method="POST" action="{{ route('artist_calls.store') }}" novalidate>
            @csrf

            <div class="form-group">
                <label for="occasion">Gelegenheid: <span class="text-danger">*</span></label>
                <select class="form-control @error('occasion') is-invalid @enderror" id="occasion" name="occasion" required>
                    <option value="" selected disabled>Kies een gelegenheid</option>
                    <option value="Bruiloft" {{ old('occasion') == 'Bruiloft' ? 'selected' : '' }}>Bruiloft</option>
                    <option value="Bedrijfsfeest" {{ old('occasion') == 'Bedrijfsfeest' ? 'selected' : '' }}>Bedrijfsfeest</option>
                    <option value="Privé feest" {{ old('occasion') == 'Privé feest' ? 'selected' : '' }}>Privé feest</option>
                    <option value="Kroeg" {{ old('occasion') == 'Kroeg' ? 'selected' : '' }}>Kroeg</option>
                    <option value="Festival" {{ old('occasion') == 'Festival' ? 'selected' : '' }}>Festival</option>
                    <option value="Receptie" {{ old('occasion') == 'Receptie' ? 'selected' : '' }}>Receptie</option>
                    <option value="Club" {{ old('occasion') == 'Club' ? 'selected' : '' }}>Club</option>
                    <option value="Kerst & Nieuwjaar" {{ old('occasion') == 'Kerst & Nieuwjaar' ? 'selected' : '' }}>Kerst & Nieuwjaar</option>
                    <option value="Anders" {{ old('occasion') == 'Anders' ? 'selected' : '' }}>Anders</option>
                </select>
                <div id="other-occasion" style="display: none;">
                    <input type="text" class="form-control mt-2" id="other-occasion-input" name="other_occasion" placeholder="Anders, vul hier in">
                </div>
                @error('occasion')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="location">Locatie: <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('location') is-invalid @enderror" id="location"
                    name="location" value="{{ old('location') }}" required>
                @error('location')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="act_type">Type act: <span class="text-danger">*</span></label>
                <select class="form-control @error('act_type') is-invalid @enderror" id="act_type" name="act_type" required>
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

            <div class="form-group">
                <label for="genre">Genre: <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre"
                    name="genre" value="{{ old('genre') }}" required>
                @error('genre')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="event_date">Datum van het evenement: <span class="text-danger">*</span></label>
                <input type="date" class="form-control @error('event_date') is-invalid @enderror" id="event_date"
                    name="event_date" value="{{ old('event_date') }}" required>
                @error('event_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="comments">Opmerkingen:</label>
                <textarea class="form-control @error('comments') is-invalid @enderror" id="comments" name="comments">{{ old('comments') }}</textarea>
                @error('comments')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="budget">Budget: <span class="text-danger">*</span></label>
                <input type="number" step="0.01" class="form-control @error('budget') is-invalid @enderror"
                    id="budget" name="budget" value="{{ old('budget') }}">
                @error('budget')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="contact_name">Naam contactpersoon: <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('contact_name') is-invalid @enderror" id="contact_name"
                    name="contact_name" value="{{ old('contact_name') }}" required>
                @error('contact_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="contact_email">Email contactpersoon: <span class="text-danger">*</span></label>
                <input type="email" class="form-control @error('contact_email') is-invalid @enderror" id="contact_email"
                    name="contact_email" value="{{ old('contact_email') }}" required>
                @error('contact_email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="contact_phone">Telefoon contactpersoon: <span class="text-danger">*</span></label>
                <input type="tel" class="form-control @error('contact_phone') is-invalid @enderror" id="contact_phone"
                    name="contact_phone" value="{{ old('contact_phone') }}" required>
                @error('contact_phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="can_call">Kan de artiest bellen: <span class="text-danger">*</span></label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="can_call" id="can_call_yes" value="1"
                        @if (old('can_call') == '1') checked @endif>
                    <label class="form-check-label" for="can_call_yes">Ja</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="can_call" id="can_call_no" value="0"
                        @if (old('can_call') == '0') checked @endif>
                    <label class="form-check-label" for="can_call_no">Nee</label>
                </div>
                @error('can_call')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
      
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
    
@endsection
