<?php

namespace App\Http\Controllers;
use App\Models\RequestHandler as Http;

class MusicController extends Controller {

    protected $http;

    public function __construct()
    {
        $this->http = new Http;

    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function index()
    {
        $resp = $this->http->get();
        dd($resp);
    }

    public function show()
    {

    }

    public function create()
    {

    }


}