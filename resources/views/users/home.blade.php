@extends('layouts.admin_layouts.header')


@section('content')
    @csrf
    <div class="test">
        <div class="row justify-content-center" style="width: 100%; height: auto;">
            <h1 style="text-align: center; padding-top: 10px;">Welkom {{ Auth::user()->name }}</h1>
            {{-- <img src="storage/{{Auth::user()->profile_img}}"> --}}
            <div class="events">
                <input id="eventname" type="text" width="270px" placeholder="Event Naam"/>
                <input id="eventstart" type="date" width="270" />
                <input id="eventtill" type="date" width="270" />
                <textarea id="event_info" type="textbox"> </textarea>
                <input id="eventprice" type="text" width="270" placeholder="Prijs"/>
                <button>Maak event</button>

            </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id vehicula justo. Duis vel sodales tellus,
                vehicula egestas mauris. Phasellus in nisl sit amet nulla posuere rutrum. Nulla facilisi. In hendrerit,
                magna sit amet tristique mollis, nibh augue gravida dolor, eget tincidunt sem dui quis lacus. Vestibulum
                ligula ipsum, sagittis at porttitor faucibus, vulputate sit amet lacus. Nulla id accumsan quam. Vestibulum
                eleifend dignissim ex, id luctus tellus dapibus vitae. Proin consequat diam mollis dapibus commodo.
                Curabitur ut mollis felis. Nullam hendrerit ligula nulla, vel bibendum diam dapibus at. In dignissim ex ac
                risus viverra, in ullamcorper nunc volutpat.</p>
        </div>
    </div>
@endsection
