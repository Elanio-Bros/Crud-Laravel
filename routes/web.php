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
//front
$router->get('/', function () {
    return view('welcome');
});

//api
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return $router->app->version();
    });
    $router->get('/pessoas','PessoaController@getPessoas');
    $router->get('/pessoas/categoria','PessoaController@getPessoascategoria');
    $router->get('/pessoa/categoria/{codigo}','PessoaController@getPessoacategoria');
    $router->get('/pessoa/{codigo}','PessoaController@getPessoa');
    $router->post('/pessoa/create','PessoaController@createPessoa');
    $router->put('/pessoa/update/{codigo}','PessoaController@updatePessoa');
    $router->patch('/pessoa/update/{codigo}','PessoaController@updatePatchPessoa');
    $router->delete('/pessoa/delete/{codigo}','PessoaController@deletePessoa');
    // $router->get('/categoria', function () use ($router) {
    //     return $router->app->version();
    // });
});
