<?php
namespace PublicNews\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use PublicNews\Http\Requests;
use Illuminate\Http\Request;
use PublicNews\Services\RssFeed;


class RssFeedController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * List the feed.
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function rss(RssFeed $feed)
	{
		$rss = $feed->getRSS();
		return response($rss)->header('Content-type', 'application/rss+xml');
	}
}