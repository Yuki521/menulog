<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipePostRequest;
use App\Models\Recipe;
use Illuminate\Http\Request;
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

    public function store(RecipePostRequest $request, Recipe $recipe)
    {
        $recipe->fill($request->all())->save();
        return back()->with('result', 'レシピが追加されました');
    }

    public function destroy(Request $request, Recipe $recipe)
    {
        $input = $request->only(['recipeId']);
        $recipe::destroy($input['recipeId']);
        return back()->with('result', 'レシピが削除されました');
    }
}
