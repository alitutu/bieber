<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Song extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'songs';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'lyrics', 'slug'];

}
