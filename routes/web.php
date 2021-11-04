<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $direct = Request::create('/api/pessoas', 'GET'); 
    $response = json_decode(Route::dispatch($direct)->getContent(),true);
    return view('welcome',['response'=>$response['data']]);
});
Route::get('/pessoas/categoria', function (Request $request) {
    $direct = Request::create('/api/pessoas/categoria?'.$request->input('page'), 'GET'); 
    $response = json_decode(Route::dispatch($direct)->getContent(),true);
    return view('pessoas_categoria',['data'=>$response['data'],'links'=>$response['links']]);
});
Route::get('/pessoas', function (Request $request) {
    $direct = Request::create('/api/pessoas?'.$request->input('page'), 'GET'); 
    $response = json_decode(Route::dispatch($direct)->getContent(),true);
    return view('pessoas_categoria',['data'=>$response['data'],'links'=>$response['links']]);
});
Route::post('/addPessoa', function (Request $request) {
    $direct=Request::create('/api/pessoa/create','POST',$request->except('_token'));
    Route::dispatch($direct);
    return redirect(url()->previous());
});
Route::get('/delete/{codigo}', function ($codigo) {
    $direct=Request::create('/api/pessoa/delete/'.$codigo,'POST');
    Route::dispatch($direct);
    return redirect(url()->previous());
});
Route::post('/editPessoa/{codigo}', function (Request $request,$codigo) {
    $direct=Request::create('api/pessoa/update/'.$codigo,'POST',$request->except('_token'));
    Route::dispatch($direct);
    return redirect(url()->previous());
});