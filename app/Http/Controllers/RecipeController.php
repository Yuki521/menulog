<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipePostRequest;
use App\Models\Recipe;
use Illuminate\Http\RedirectResponse;
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

        return view('recipe.index', ['recipes' => $recipes]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('recipe.create');
    }

    /**
     * @param RecipePostRequest $request
     * @param Recipe $recipe
     * @return RedirectResponse
     */
    public function store(RecipePostRequest $request, Recipe $recipe)
    {
        $recipe->fill($request->all())->save();
        return back()->with('result', 'レシピが追加されました');
    }

    /**
     * @param int $recipeId
     * @return View
     */
    public function edit(int $recipeId): View
    {
        $recipe = Recipe::findOrFail($recipeId);
        return view('recipe.edit',['recipe' => $recipe]);
    }

    /**
     * @param RecipePostRequest $request
     * @param int $recipeId
     * @return RedirectResponse
     */
    public function update(RecipePostRequest $request,int $recipeId): RedirectResponse
    {
        $recipe = Recipe::findOrFail($recipeId);
        $recipe->fill($request->all())->save();
        return redirect('recipe/index')->with('result', 'レシピが変更されました');
    }

    /**
     * @param Request $request
     * @param Recipe $recipe
     * @return RedirectResponse
     */
    public function destroy(Request $request, Recipe $recipe)
    {
        $input = $request->only(['recipeId']);
        $recipe::destroy($input['recipeId']);
        return back()->with('result', 'レシピが削除されました');
    }
}
