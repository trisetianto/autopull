<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->welcome();
});

$app->post('/passtel-web', ['uses' => 'WebHookController@passtelWeb']);

$app->get('/passtel-web', ['uses' => 'WebHookController@passtelWeb']);

$app->post('bitbucket-hook', ['uses' => 'WebHookController@bitbucket']);

$app->get('bitbucket-hook', ['uses' => 'WebHookController@bitbucket']);
