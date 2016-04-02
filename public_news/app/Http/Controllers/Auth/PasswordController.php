<?php

namespace PublicNews\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use PublicNews\User;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Input;

use PublicNews\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function first($confirmation_code)
    {
    	
    	$user = User::where('confirmation_code','=',$confirmation_code)->first();
		if ( ! $user)
		{
			throw new InvalidConfirmationCodeException;
		}
		
		if( $user->confirmed )
		{
			return "User is already register and have a password.";
		}
    
    	return view('auth.passwords.first', ['confirmation_code'=>$confirmation_code,'email'=>Input::get('email')]);
    }
    
    public function store()
    {
    	$rules = [
            'password' => 'required|confirmed|min:6'
    	];
    
    	$input = Input::only(
    			'password',
    			'password_confirmation'
    	);
    
    	$validator = Validator::make($input, $rules);
    
    	if($validator->fails())
    	{
    		return Redirect::back()->withInput()->withErrors($validator);
    	}
    
    	$confirmation_code = str_random(30);
    	
    	$user = User::where('confirmation_code','=',Input::get('confirmation_code'))->first();
    	$user->password = Hash::make(Input::get('password'));
    	$user->save();
    	
    	Auth::login($user);
    
    	return view('home', ['action'=>'success','message'=>'Welcome! Write your first article.','articles'=>[]]);
    }
    
}
