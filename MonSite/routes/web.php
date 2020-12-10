<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\FournisseurController;

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
    return view('welcome');
});
Route::get('/test', function() {
	return view('test');
});
Route::get('/Games', [GamesController::class, 'index']);
Route::get('/Games/create', [GamesController::class, 'create']);
Route::get('/Games/{jeu}', [GamesController::class, 'show']);
Route::post('/Games', [GamesController::class, 'store']);
Route::get('/Games/{jeu}/edit', [GamesController::class, 'edit']);
Route::patch('/Games/{jeu}', [GamesController::class, 'update']);
Route::delete('/Games/{jeu}', [GamesController::class, 'destroy']);


Route::ressource("fournisseurs", FournisseurController::class);

