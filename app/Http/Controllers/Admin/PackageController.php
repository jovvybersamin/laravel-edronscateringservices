<?php

namespace App\Http\Controllers\Admin;



use App\Package;
use App\Menu;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\PackageRequest;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{


    /**
     * List all the packages
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $packages = Package::all();
        return view('admin.packages.index',compact('packages'));
    }

    /**
     * Show the package create form
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.packages.create');
    }

    /**
     * Show the package edit form.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $package = Package::findOrFail($id);
        $package_courses = $package->courses()->get();
        $package_rules = $package->rules()->get();
        $menus = Menu::orderBy('name')->where('is_main_course',0)->lists('name','id');

        if(!$menus->count()){
            $menus->put(0,'No Menus found.');
        }

        return view('admin.packages.edit',compact('package','package_courses','package_rules','menus'));
    }

    /**
     * Create new package.
     *
     * @param Requests\PackageRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(PackageRequest $request)
    {
        $package = Package::create($request->all());
        flash()->message('Successfully added new package: ' . $package->name,'success');
        return redirect('admin/packages');
    }


    /**
     * Updates the selected package.
     *
     * @param $id
     * @param PackageRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id,PackageRequest $request)
    {
        $package = Package::findOrFail($id);
        $package->update($request->all());

        flash()->message('Successfully updated: ' . $package->name,'success');
        return redirect()->route('admin.packages.edit',[$package->id]);
    }

    /**
     * Save the associated image for the package.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function media(Request $request)
    {
        $package = Package::find($request->get('package_id'));
        $file = $request->file('file');
        $name = time() . $file->getClientOriginalName();

        $path = "/packages/" . $package->id."/photos/{$name}";
        $file->move('packages/' . $package->id."/photos",$name);

        if($package->photo()->count()){
            $package->photo()->update(['path' => $path]);
        } else {
            $package->photo()->create(['path' => $path]);
        }
        return response()->json(['message' => 'Successfully Uploaded','file_path' => $path]);
    }

}
