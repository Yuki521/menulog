<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuPostRequest;
use App\Models\Menu;
use App\Models\Recipe;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index(): View
    {
        $menus = Menu::all();
        return view('menu.index',['menus' => $menus]);
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create(): View
    {
        $recipes = Recipe::all();
        return view('menu.create',['recipes' => $recipes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param MenuPostRequest $request
     * @param Menu $menu
     * @return RedirectResponse
     */
    public function store(MenuPostRequest $request, Menu $menu): RedirectResponse
    {
        $recipeIds = $request->recipe_ids;
        $menu->fill($request->all())->save();

        $menu->recipes()->sync($recipeIds);

        return back()->with('result', 'メニューが追加されました');
    }

    /**
     * Display the specified resource.
     *
     * @param int $menuId
     * @return View
     */
    public function show(int $menuId): View
    {
        $menu = Menu::with('recipes')->find($menuId);

        return view('menu.show',['menu' => $menu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $menuId
     * @return RedirectResponse
     */
    public function destroy(int $menuId): RedirectResponse
    {
        Menu::destroy($menuId);
        return back()->with('result', 'メニューが削除されました');
    }
}
