<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/../vendor/autoload.php';

//Slimの読み込み。
$app = new \Slim\App;

$app->get('/', function (Request $request, Response $response) {
    $response->getBody()->write("Hello World!!");
});

//URI：/hello/{name} get
//実行する処理。
$app->get('/hello/{name}', function (Request $request, Response $response) {
    //$requestのname属性を取得する。
    $name = $request->getAttribute('name');
    //getBodyでbodyを取得して、hello nameを表示する。
    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->run();
