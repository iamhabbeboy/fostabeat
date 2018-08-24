<?php
namespace App\Traits;

trait RequestHandler{

	public function formatResponse($json)
	{
		return json_decode($json, true);
	}
}