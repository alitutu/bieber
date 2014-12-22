@extends('layouts.app')

@section('content')
<div id="welcome">
    <div class="jumbotron">
        <div class="container">
            <h1 class="jumbotron__header">Add A New Song.</h1>
            <p class="jumbotron__body">
               {!! link_to_route('songs_path', 'cancel') !!}
            </p>
        </div>
    </div>

    <div class="container">

        {!! Form::open(['route' => 'save_song']) !!}
        	@include('songs._form')
        {!! Form::close() !!}
 
    </div>
</div>
@stop
