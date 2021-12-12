<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JsonController;
use App\Http\Controllers\IntegradoraController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Rutas JWT//

Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);
Route::post('refresh', [AuthController::class, 'refresh']);
Route::get('me', [AuthController::class, 'me']);
Route::post('register', [AuthController::class, 'register']);
Route::post('guzzle', [AuthController::class, 'register']);

//RUTAS ADAFRUIT//

Route::post('/distancia/{id}', [IntegradoraController::class, 'InsertarDistancia']);
Route::post('/movimiento/{id}', [IntegradoraController::class, 'InsertarMovimiento']);

//RUTAS REGISTRAR Y LOGIN//
Route::post('/registrar/{usuario}/{contraseña}/{correo}',[IntegradoraController::class, 'Registrar']);

//MOSTRAR DATOS POR USUARIO//
Route::get('/datoDistancia/{id}', [IntegradoraController::class, 'MostrarDistancia']);

//MOSTRAR DATOS//
Route::get('/datoDis', [IntegradoraController::class, 'mostrardis']);
Route::get('/datoMov', [IntegradoraController::class, 'mostrarmov']);

//GUZZLE//

Route::get('/JSON',[JsonController::class,'guzzle']);
