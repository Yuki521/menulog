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

Route::get('recipe/index', [RecipeController::class, 'index'])->name('recipe.index');

Route::get('recipe/create', [RecipeController::class, 'create'])->name('recipe.create');

Route::post('recipe/create', [RecipeController::class, 'store'])->name('recipe.create');

Route::delete('/', [RecipeController::class, 'destroy'])->name('recipe.destroy');

Route::resources(['menu' => MenuController::class]);
