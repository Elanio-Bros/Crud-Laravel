<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user(]);
// }]);
Route::get('/pessoas', [PessoaController::class,'getPessoas']);
Route::get('/pessoas/categoria', [PessoaController::class,'getPessoascategoria']);
Route::get('/pessoa/categoria/{codigo}', [PessoaController::class,'getPessoacategoria']);
Route::get('/pessoa/{codigo}', [PessoaController::class,'getPessoa']);
Route::post('/pessoa/create', [PessoaController::class,'createPessoa']);
Route::put('/pessoa/update/{codigo}', [PessoaController::class,'updatePessoa']);
Route::patch('/pessoa/update/{codigo}', [PessoaController::class,'updatePatchPessoa']);
Route::delete('/pessoa/delete/{codigo}', [PessoaController::class,'deletePessoa']);
Route::post('/pessoa/update/{codigo}', [PessoaController::class,'updatePessoa']);
Route::post('/pessoa/update/{codigo}', [PessoaController::class,'updatePatchPessoa']);
Route::post('/pessoa/delete/{codigo}', [PessoaController::class,'deletePessoa']);

