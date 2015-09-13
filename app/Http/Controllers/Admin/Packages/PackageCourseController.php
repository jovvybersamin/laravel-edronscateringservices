<?php
/**
 * Created by PhpStorm.
 * User: Mikro
 * Date: 9/5/2015
 * Time: 2:46 PM
 */

namespace App\Http\Controllers\Admin\Packages;

use App\Package;
use App\PackageCourse;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\PackageCourseRequest;
use App\Http\Controllers\Controller;

class PackageCourseController extends Controller{


    public function show(Request $request)
    {

    }
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getTable(Request $request)
    {
        $elems = '';
        $package = Package::find($request->get('package_id'));
        $packageCourses = $package->courses->toArray();


        foreach($packageCourses as $packageCourse)
        {
            //
            $elems .= '<tr>';
            $elems .= '<td></td>';
            $elems .= '<td class="center">'. $packageCourse['no_of_main_courses'] .'</td>';
            $elems .= '<td class="right">'. $packageCourse['price_per_head'] .'</td>';
            $elems .=  '<td class="edit">'.
                        '<p data-placement="top" data-toggle="tooltip" title="Edit">'.
                            '<a href="' . route('admin.package-course.edit',['id' => $packageCourse['id']]) .'" onclick="PackageCourse.edit(this); return false;" class="edit btn btn-primary btn-xs" data-target="#edit-package-course-modal" data-title="Edit" >'.
                                '<span class="glyphicon glyphicon-pencil"></span>'.
                           '</a>'.
                        '</p>'.
                    '</td>';
            $elems  .=      '<td class="delete">'.
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

    /**
     * @param PackageCourseRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PackageCourseRequest $request)
    {
        $package = Package::find($request->get('package_id'));
        $inputs = $request->except(['package_id','_token','_method']);
        $packageCourses = $package->courses()->save(new PackageCourse($inputs));
        return response()->json(['message' => 'Successfully Save!','data' => $packageCourses]);
    }


    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $package_course = PackageCourse::findOrFail($id);
        $package = $package_course->package()->first();
        return view('admin.packages.modals.package_courses._edit_package_course',compact('package_course','package'));
    }

    /**
     * @param PackageCourseRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(PackageCourseRequest $request)
    {
        $package = Package::findOrFail($request->get('package_id'));
        $inputs = $request->except(['package_id','_token','_method']);
        $package_course = $package->courses()->findOrFail($request->get('id'));
        $package_course->update($inputs);
        return response()->json(['message' => 'Successfully Save!','data' => $package_course]);
    }

}