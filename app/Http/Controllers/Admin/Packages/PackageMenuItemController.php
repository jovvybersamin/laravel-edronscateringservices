<?php

namespace App\Http\Controllers\Admin\Packages;

use Illuminate\Http\Request;

use App\Package;
use App\MenuItem;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PackageMenuItemController extends Controller
{

    public function getTable(Request $request)
    {
        $elems = '';

        if($request->ajax())
        {
            $package = Package::findOrFail($request->get('package_id'));
            $package_menuitems = $package->menuitems()->get();

            foreach($package_menuitems as $menuitem)
            {
                $elems .= '<tr>';
                $elems .= '<td></td>';
                $elems .= '<td class="center">'. $menuitem->name .'</td>';
                $elems .= '<td class="center">'. $menuitem->menu->name .'</td>';
                $elems .= '<td class="delete">'.
                    '<p data-placement="top" data-toggle="tooltip" title="Delete">'.
                    '<button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" >'.
                    '<span class="glyphicon glyphicon-trash"></span>'.
                    '</button>'.
                    '</p>'.
                    '</td>';
                $elems .= '</tr>';
            }

            return $elems;
        }

    }


    /**
     * @param $package_id
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function getModalTable($package_id,Request $request)
    {
        if($request->ajax())
        {
            $package = Package::findOrFail($package_id);
            $menuitems = MenuItem::notListed($package_id)->get();
            return view('admin.packages.modals.package_menuitems._table',compact('package','menuitems'));
        }
        else
        {

        }
    }

    /**
     *
     *
     * @param $package_id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function add($package_id,Request $request)
    {
        if($request->ajax())
        {
            if (count($request->get('id'))){
                $package = Package::findOrFail($package_id);
                $package->menuitems()->attach($request->get('id'));
                return response()->json(['message' => sprintf("Successfully added %d menu item/s",count($request->get('id')))]);
            }
            return response()->json(['message' => 'You need to select alteast one menu item.','type' => 'danger']);
        }
    }


}
