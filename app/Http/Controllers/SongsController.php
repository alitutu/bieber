<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateSongRequest;
use App\Http\Controllers\Controller;

use App\Song;

class SongsController extends Controller {


	/**
	 * @var Song
	 */
	private $song;

	public function __construct(Song $song)
	{
		$this->song = $song;
	}

	/**
	 * Display a listing of songs.
	 *
	 * @return View
	 */
	public function index()
	{
		$songs = $this->song->get();

		return view('songs.index', compact('songs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('songs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateSongRequest $request, Song $song)
	{
		$song->create($request->all());

		return redirect()->route('songs_path');
	}

	/**
	 * Show an individual song.
	 *
	 * @param  Song $song
	 * @return View
	 */
	public function show(Song $song)
	{
	
		return view('songs.show', compact('song'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Song $song
	 * @return View
	 */
	public function edit(Song $song)
	{
		
		return view('songs.edit', compact('song'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Song $song
	 * @return Redirect
	 */
	public function update(Song $song, Request $request)
	{
		
		$song->fill($request->input())->save();

		return redirect()->route('songs_path');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Song $song)
	{
		$song->delete();

		return redirect()->route('songs_path');
	}

}
