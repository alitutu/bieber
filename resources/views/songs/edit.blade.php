@extends('layouts.app')

@section('content')
<div id="welcome">
    <div class="jumbotron">
        <div class="container">
            <h1 class="jumbotron__header">Edit {{ $song->title }}.</h1>
            <p class="jumbotron__body">
                 {!! link_to_route('songs_path', 'back') !!}
            </p>
        </div>
    </div>

    <div class="container">

        {!! Form::model($song, ['route' => ['update_song', $song->slug], 'method' => 'PATCH']) !!}
            @include('songs._form')
        {!! Form::close() !!}

        {!! delete_form(['delete_song', $song->slug]) !!}
         
    </div>
</div>
@stop
