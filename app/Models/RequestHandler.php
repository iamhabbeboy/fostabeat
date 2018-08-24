<?php
namespace App\Models;

use App\Traits\RequestHandler as formatter;
use GuzzleHttp\Client;
class RequestHandler extends Client
{
	/**
	 * [$http description]
	 * @var [type]
	 */
	protected $http;

	public function __construct()
	{
		$uri = 'https://api.deezer.com';//env('DEEZER_URI');
		$this->http = new Client(['base_url' => $uri]);
	}

	public function get()
	{
		$resp = $this->http->get('/search/artist/?q=eminem&index=0&limit=2&output=xml');
		return $resp->getBody();
	}
}