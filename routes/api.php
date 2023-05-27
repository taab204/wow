<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JsonController;

//Enviar Datero
Route::get('enviardateros', [JsonController::class, 'enviardateros'])->name('api_enviardateros');
Route::post('recibirdateros', [JsonController::class, 'recibirdateros'])->name('api_recibirdateros');
// Route::get('enviardateros','Api\JsonController@enviardateros');

//auth jwt
Route::post('register','Api\AdminController@register');
Route::post('login','Api\AdminController@login');
Route::get('logout','Api\AdminController@logout');
Route::get('admin','Api\AdminController@getCurrentAdmin');
Route::post('update','Api\AdminController@update');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
