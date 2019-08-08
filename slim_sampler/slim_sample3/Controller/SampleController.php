<?php

use Slim\Http\Request;
use Slim\Http\Response;

class SampleController
{
    public function index(Request $request, Response $response)
    {
        $name = $request->getAttribute('name');
        $response = $response->withJson(["response" => "Hello, $name"], 200);
        return $response;
    }
}