<?php

namespace App\Http\Controllers\Admin\Packages;

use Illuminate\Http\Request;

use App\Package;
use App\Menu;
use App\PackageRule;
use App\Http\Requests;
use App\Http\Requests\PackageRuleRequest;
use App\Http\Controllers\Controller;

class PackageRuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(PackageRuleRequest $request)
    {
        if($request->ajax())
        {
            if ($request->get('menu_id') == 0)
                return response()->json(['message' => 'You need to select a menu.']);

            $package    =   Package::findOrFail($request->get('package_id'));
            $inputs     =   $request->except('_package_id','_token','_method');
            $rule       =   $package->rules()->save(new PackageRule($inputs));

            return response()->json(['message' => 'Successfully Save!','data' => $rule]);
        }

        return response()->json(['message' => 'Not Authorized']);
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
        $package_rule   = PackageRule::findOrFail($id);
        $menus          = Menu::orderBy('name')->notMainCourse()->lists('name','id');
        $package        = $package_rule->package()->first();
        return view('admin.packages.modals.package_rules._edit_package_rule',compact('package_rule','package','menus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($id,PackageRuleRequest $request)
    {
        if ($request->ajax())
        {
            $package        =   Package::findOrFail($request->get('package_id'));
            $inputs         =   $request->except(['package_id','_token','_method']);
            $package_rule   =   $package->rules()->findOrFail($id);
            $package_rule->update($inputs);
            return response()->json(['message' => 'Successfully Save!','data' => $package_rule]);
        }
        return esponse()->json(['message' => 'Not Authorized']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
