<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Menu;
use App\MenuItem;
use App\Http\Requests;
use App\Http\Requests\MenuItemRequest;
use App\Http\Controllers\Controller;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the menuitems.
     *
     * @return Response
     */
    public function index()
    {
        $menuitems = MenuItem::orderBy('name','asc')->get();
        return view('admin.menuitems.index',compact('menuitems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $menus = Menu::orderBy('name')->lists('name','id');
        return view('admin.menuitems.create',compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(MenuItemRequest $request)
    {
        $menuitem = MenuItem::create($request->all());
        flash()->message('Successfully added new menu items: ' . $menuitem->name,'success');
        return redirect()->route('admin.menuitems.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $menuitem = MenuItem::findOrFail($id);
        $menus = Menu::orderBy('name')->lists('name','id');
        return view('admin.menuitems.edit',compact('menuitem','menus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($id,MenuItemRequest $request)
    {
        $menuitem = MenuItem::findOrFail($id);
        $menuitem->update($request->all());
        flash()->message('Successfully updated: ' . $menuitem->name,'success');
        return redirect()->route('admin.menuitems.edit',[$menuitem->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        MenuItem::destroy($id);
        return response()->json(['message' => 'success']);
    }
}
