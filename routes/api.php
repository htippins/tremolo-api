<?php
use App\Models\TodoList;

use App\Http\Controllers\TodoListsController;
use App\Http\Controllers\CardsController;
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

Route::resource('todolists', TodoListsController::class);
Route::resource('cards', CardsController::class);