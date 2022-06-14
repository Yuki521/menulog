<?php

use App\Http\Controllers\RecipeController;
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
    return view('recipe/index');
});

Route::get('/', [RecipeController::class, 'index']);

Route::get('recipe/create', [RecipeController::class, 'create']);

Route::post('recipe/create', [RecipeController::class, 'store']);
