<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DocumentoController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AuthController;

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
//     return $request->user();
// });

//#############################################################################

Route::namespace('Api')->group(function () {

    Route::post('login', [AuthController::class, 'login']);
    Route::get('/usuarios', [UserController::class, 'listaUsuarios']);
    Route::get('/status', [DocumentoController::class, 'status']);
    Route::get('/documentos/{cpf}', [DocumentoController::class, 'lista']);
    Route::get('/documentos/cpf/{cpfcnpj}', [DocumentoController::class, 'consulta']);
    
});

// Route::get('/teste', function () {
//     return ['status' => 'ok'];
// });