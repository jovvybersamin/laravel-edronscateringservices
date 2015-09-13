<?php

namespace App\Http\Controllers\Admin\Packages;

use Illuminate\Http\Request;

use App\Package;
use App\PackageRule;
use App\Http\Requests;
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
    public function store(Requests\PackageRuleRequest $request)
    {
        if ($request->get('menu_id') == 0)
            return response(['message' => 'You need to select a menu.']);

        $package    =   Package::findOrFail($request->get('package_id'));
        $inputs     =   $request->except('_package_id','_token','_method');
        $rule       =   $package->rules()->save(new PackageRule($inputs));

        return response()->json(['message' => 'Successfully Save!','data' => $rule]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
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
