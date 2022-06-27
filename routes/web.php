<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\TopController;
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
    return view('top/index');
});

Route::get('/', [TopController::class, 'index']);

Route::controller(RecipeController::class)
    ->prefix('recipe')
    ->as('recipe.')
    ->group(function () {
        Route::get('/index', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/create', 'store')->name('create');
        Route::get('{recipeId}/edit', 'edit')->name('edit');
        Route::put('{recipeId}/edit', 'update')->name('update');
        Route::delete('/', 'destroy')->name('destroy');
    });

Route::resources(['menu' => MenuController::class]);
