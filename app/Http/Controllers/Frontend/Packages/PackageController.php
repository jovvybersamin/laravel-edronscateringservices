<?php

namespace App\Http\Controllers\Frontend\Packages;

use Illuminate\Http\Request;

use App\Package;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{

    public function show($id)
    {

        $package    =   Package::findOrFail($id);

    }

}
