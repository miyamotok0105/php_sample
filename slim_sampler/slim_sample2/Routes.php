<?php

$app = new \Slim\App;

$app->get('/', SampleController::class . ':index');

$app->get('/hello/{name}', SampleController::class . ':index');
$app->run();

