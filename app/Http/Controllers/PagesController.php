<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('frontend.home.default');
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
}
