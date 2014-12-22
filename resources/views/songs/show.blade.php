@extends('layouts.app')

@section('content')
<div id="welcome">
    <div class="jumbotron">
        <div class="container">
            <h1 class="jumbotron__header">{{ $song->title }}.</h1>
            <p class="jumbotron__body">
            	{!! link_to_route('songs_path', 'back' ) !!} | {!! link_to_route('song_path', 'edit', [$song->slug.'/edit'] ) !!}
            </p>
        </div>
    </div>

    <div class="container">
    	@if($song->lyrics)
	    	<article>
	    		{!! nl2br($song->lyrics) !!}
	    	</article>
    	@endif
      
    </div>
</div>
@stop
