<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Package;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    /**
     * Shows the frontend home page.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {

        $packages = Package::all();
        return view('frontend.home.default',compact('packages'));
    }




    /**
     * Shows the frontend gallery page.
     *
     * @return string
     */
    public function gallery()
    {
        return 'Gallery';
    }

    public function menu()
    {
        return view ('frontend.menu.menu');
    }

    public function packages()
    {

        $packages = Package::all();
        return view('frontend.packages.package',compact('packages   '));
    }

    public function contact()
    {
        return view('frontend.contact.contact');
    }

      public function package_menu()
    {
        return view('frontend.package_menu.package1');
    }

       public function package_menu2()
    {
        return view('frontend.package_menu.package1');
    }

}
