<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\View\View;

class RecipeController extends Controller
{
    /**
     * レシピ一覧を表示します
     * @return View
     */
    public function index(): View
    {
        $recipes = Recipe::all();

        return view('recipe.index',['recipes' => $recipes]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('recipe.create');
    }
}
