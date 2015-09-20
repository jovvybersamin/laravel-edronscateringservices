<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Support\Facades\Auth;

trait RedirectsUsers
{
    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {

        if (property_exists($this, 'redirectPath')) {
            return $this->redirectPath;
        }

        if (Auth::user()->isAdmin())
        {
            return property_exists($this, 'redirectToIfAdmin') ? $this->redirectToIfAdmin : '/';
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
    }
}
