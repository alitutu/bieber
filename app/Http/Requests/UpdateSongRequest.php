<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateSongRequest extends Request {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'title' => 'required',
			'slug'	=> 'required|unique:songs,slug'



		//  public function rules()
		// {
		// //If the request is updating a song, we know we passed in a slug through the url
		// if($this->method() == 'PATCH'){
		// //retrieve url from request
		// $url = $this->url();
		// //Strip it to get the slug
		// $slug = substr( $url, strrpos( $url, '/' )+1 );
		// //Grab the model from the database using the slug as the identifier
		// //Since we know it is a PATCH request, the model has to exist, and the previous slug hasn't been updated since we are in validation
		// $song = \App\Song::whereSlug($slug)->first();
		// //Get the id to pass into the rules from song model
		// $id = $song->id;

		// return [
		// 'title' => 'required',
		// 'slug' => 'required|unique:songs,slug,'.$id
		// ];
		// }
		// //Else it is the POST / store request
		// return [
		// 'title' => 'required',
		// 'slug' => 'required|unique:songs,slug'
		// ];
		// }






		];
	}

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return false;
	}

}
