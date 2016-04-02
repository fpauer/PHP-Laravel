<?php

namespace PublicNews\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use PublicNews\Http\Requests;
use Illuminate\Http\Request;
use PublicNews\Articles;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the user articles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$articles = Articles::where('user_id', '=', Auth::user()->id)->orderBy('updated_at', 'DESC')->get();
    	
    	if( Auth::user()->confirmed )
        	return view('home', ['articles'=>$articles]);
    	else
    		return view('home', ['action'=>'confirmation','message'=>'Welcome! Please confirm your e-mail before start.','articles'=>[]]);
    }
}
