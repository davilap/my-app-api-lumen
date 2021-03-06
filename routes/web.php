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

$router->get('/version', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->get('/products', 'ProductController@index');
    $router->get('/store', 'ProductController@find');
    $router->post('/product', 'ProductController@store');
    $router->delete('/product/{id}', 'ProductController@delete');

    $router->get('/categories', 'CategoryController@index');
});
