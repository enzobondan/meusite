<?php

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
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/noticias/create', [EventController::class, 'create']);

Route::get('/noticias/{id}', [EventController::class, 'show']);

Route::post('/noticias', [EventController::class, 'store']);

Route::get('/membros/{id}', function ($id = null) {
    $busca = request('search');
    return view('members', ['id' => $id],['busca' => $busca]);
});
