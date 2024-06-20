<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function view($page = null)
    {
        if (!$page) $page = 'home';

        return view($page);
    }

    public function user($page = null)
    {
        if (!$page) $page = 'dashboard';

        return view('user/' . $page);
    }
}
