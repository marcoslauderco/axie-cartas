<?php

use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'cards'])->name("cards");
Route::get('/sobre', [PublicController::class, 'about'])->name("sobre");
Route::get('/runes', [PublicController::class, 'runes'])->name("runes");
Route::get('/charms', [PublicController::class, 'charms'])->name("charms");

Route::get('/update', [ActionController::class, 'update']);
Route::get('/seed', [ActionController::class, 'seed']);
