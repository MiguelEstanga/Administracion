<?php

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get("prueba" , function(){
    $categoria =  Categoria::all();
    return json_encode($categoria);
} );
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
