<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/tools', ['uses' => 'ToolController@index']);
$router->get('/tools/{id}', ['uses' => 'ToolController@show']);
$router->put('/tools/{id}', ['uses' => 'ToolController@update']);
$router->post('/tools/store', ['uses' => 'ToolController@store']);
$router->delete('/tools/{id}', ['uses' => 'ToolController@destroy']);
