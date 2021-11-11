<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index_view');
    }

    public function about()
    {
        return view('about_view');
    }
}
