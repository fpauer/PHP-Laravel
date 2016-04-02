<?php

namespace PublicNews\Services;

use PublicNews\Articles;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Suin\RSSWriter\Channel;
use Suin\RSSWriter\Feed;
use Suin\RSSWriter\Item;

class RssFeed
{
	/**
	 * Return the content of the RSS feed
	 */
	public function getRSS()
	{
		if (Cache::has('rss-feed')) {
			return Cache::get('rss-feed');
		}

		$rss = $this->buildRssData();
		Cache::add('rss-feed', $rss, 120);

		return $rss;
	}

	/**
	 * Return a string with the feed data
	 *
	 * @return string
	 */
	protected function buildRssData()
	{
		$now = Carbon::now();
		$feed = new Feed();
		$channel = new Channel();
		$channel
		->title('Public News')
		->description('Latest news around the world!')
		->url(url('/'))
		->language('en')
		->copyright('Copyright (c) 2016')
		->lastBuildDate($now->timestamp)
		->appendTo($feed);
		
		$articles = Articles::where('active','=',1)->orderBy('updated_at', 'DESC')->take(10)->get();

		foreach ($articles as $article) {
			$item = new Item();
			$item
			->title($article->title)
			->url(url('/article'."/".$article->link))
			->pubDate($article->updated_at->timestamp)
			->guid(url('/article'."/".$article->link), true)
			->appendTo($channel);
		}

		$feed = (string)$feed;

		// Replace a couple items to make the feed more compliant
		$feed = str_replace(
				'<rss xmlns:content="http://purl.org/rss/1.0/modules/content/" version="2.0">',
				'<rss xmlns:atom="http://www.w3.org/2005/Atom" version="2.0" >',
				$feed
		);
		$feed = str_replace(
				'<channel>',
				'<channel>'."\n".'    <atom:link href="'.url('/rss').
				'" rel="self" type="application/rss+xml" />',
				$feed
		);

		return $feed;
	}
}
