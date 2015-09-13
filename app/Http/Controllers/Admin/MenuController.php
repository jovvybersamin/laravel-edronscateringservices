<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Menu;
use App\Http\Requests;
use App\Http\Requests\MenuRequest;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{

    /**
     * List all the menus
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $menus = Menu::orderBy('name','asc')->get();
        return view('admin.menus.index',compact('menus'));
    }


    /**
     * Show the create menu form.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.menus.create');
    }


    /**
     * Store the menu on the database.
     *
     * @param MenuRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(MenuRequest $request)
    {
        $menu = Menu::create($request->all());
        flash()->message('Successfully added new menu: ' . $menu->name,'success');
        return redirect()->route('admin.menus.index');
    }


    /**
     * Show the edit menu form.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('admin.menus.edit',compact('menu'));
    }


    /**
     * Updates the current record in the database
     *
     * @param Menu $menu
     * @param MenuRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id,MenuRequest $request)
    {
        $menu = Menu::findOrFail($id);
        $menu->update($request->all());
        flash()->message('Successfully updated: ' . $menu->name,'success');
        return redirect()->route('admin.menus.edit',[$menu->id]);
    }
}
