@extends('layouts.app')

@section('content')
<div id="welcome">
    <div class="jumbotron">
        <div class="container">
            <h1 class="jumbotron__header">The Songbook.</h1>

            <p class="jumbotron__body">
                This songbook is an automated bs list of songs..
            </p>
        </div>
    </div>

    <div class="container">
        <ol class="steps">
            @foreach($songs as $song)
            <li class="steps__item">
                <div class="body">
                    <h2>
                        {!! link_to_route('song_path', $song->title, [$song->slug] ) !!}
                    </h2>

                    <p>
                        Review <code>app/Http/routes.php</code> to learn how HTTP requests are
                        routed to controllers.
                    </p>

                    <p>
                        We've included simple login and registration screens to get you started.
                    </p>
                </div>
            </li>
            @endforeach
        </ol>
    </div>
</div>
@stop
