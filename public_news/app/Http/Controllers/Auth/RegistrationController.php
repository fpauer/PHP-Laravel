<?php

namespace PublicNews\Http\Controllers\Auth;


use Illuminate\Auth\Passwords\DatabaseTokenRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PublicNews\User;
use Illuminate\Support\Facades\Validator;
use PublicNews\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;

class RegistrationController extends Controller {

	public function store()
	{
		$rules = [
		'name' => 'required|min:6',
		'email' => 'required|email|unique:users'
		];

		$input = Input::only(
				'name',
				'email'
		);

		$validator = Validator::make($input, $rules);

		if($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$confirmation_code = str_random(30);

		$user = User::create([
				'name' => Input::get('name'),
				'email' => Input::get('email'),
				'password' => '',
				'confirmed' => 0,
				'confirmation_code' => $confirmation_code
				]);
		
		Mail::send('auth.emails.verify', ['confirmation_code'=>$confirmation_code], function($message) {
			$message->to(Input::get('email'), Input::get('name'))
			->subject('Verify your email address');
		});

		return view('home', ['action'=>'confirmation','message'=>'Welcome! Please confirm your e-mail before start.','articles'=>[]]);
	}
	
	public function confirm($confirmation_code)
	{
		if( ! $confirmation_code)
		{
			throw new InvalidConfirmationCodeException;
		}
	
		$user = User::where('confirmation_code','=',$confirmation_code)->first();
	
		if ( ! $user)
		{
			throw new InvalidConfirmationCodeException;
		}
	
		$user->confirmed = 1;
		$user->save();
		
		//forcing the user to change the password
		return Redirect::to( '/password/first/'.$user->confirmation_code.'/?email='.$user->email);
	}
	
	
	/**
	 * Get the guard to be used during registration.
	 *
	 * @return string|null
	 */
	protected function getGuard()
	{
		return property_exists($this, 'guard') ? $this->guard : null;
	}
}