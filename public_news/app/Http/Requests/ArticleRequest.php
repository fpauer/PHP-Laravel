<?php

namespace PublicNews\Http\Requests;


class ArticleRequest extends Request
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}
	
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
	'Title' => 'required|min:5',
       'Content' => 'required|min:5']; 
	}	
}