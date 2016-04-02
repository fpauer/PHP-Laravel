<?php

use Illuminate\Support\Facades\Crypt;

use PublicNews\User;

use PublicNews\Articles;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UnitTest extends TestCase
{
	/**
	 * Setup.
	 *
	 * @return void
	 */
	public function setUp()
	{
		parent::setUp();
	
		Session::start();
	}
	
	/**
	 * A functional test.
	 *
	 * @return void
	 */
	public function testApplication()
	{
		$this->call('GET', '/');

		//check if the application is running
		$this->assertResponseOk();
		
		//check if the latest articles is shown
		$articles = Articles::where('active','=',1)->orderBy('updated_at', 'DESC')->take(10)->get();
		$this->assertViewHas('articles', $articles);
		
		//check if the user is logged and if the their current list is OK
		$user = User::find(1);
		$this->be($user);
		
		$this->call('GET', '/home');
		
		$articles = Articles::where('user_id', '=', $user->id)->orderBy('updated_at', 'DESC')->get();
		$this->assertViewHas('articles', $articles);
		
		
		//check if the user can create a new article
		$response = $this->call('GET', '/article/create');
		$article = new Articles();
		$this->assertViewHas('article', $article);
		
		//check if the article can be created
		$values = array(
		'Title' => 'UnitTest Title',
		'Content' => 'UnitTest Content',
		'ReporterName' => $user->name,
		'ReporterEmail' => $user->email
		);
		
		ini_set('xdebug.max_nesting_level', 200);
		$response = $this->action('POST', 'ArticleController@store', null, $values);
		$article  = Articles::where('user_id','=',Auth::user()->id)->orderBy('id', 'DESC')->first();
		
		//check if the article have the correct permalink
		$this->assertEquals('unittest-title', $article->link);
		
		//check if the article is hidden
		$this->assertEquals(0, $article->active);
		
		//check if the article is visible now
		$values = array(
				'active' => 1
		);
		$response = $this->call('GET', '/article/'.Crypt::encrypt($article->id).'/update' ,$values);
		$article  = Articles::where('id','=',$article->id)->first();
		
		//check if the article is visible now
		$this->assertEquals(1, $article->active);
		
		
		//check if the pdf was generated
		$values = array(
				'slug' => $article->link
		);
		$response = $this->call('GET', '/article/'.$article->link.'/pdf' ,$values);
		$this->assertEquals($response->getStatusCode(), 200);
		
		//delete the article
		$response = $this->call('GET', '/article/'.Crypt::encrypt($article->id).'/destroy' ,$values);
		$this->assertEquals('OK', $response->getContent());
		
	}
}
