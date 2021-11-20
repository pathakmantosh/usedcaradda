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
    public function cardetails($key, $id)
    {
        return view('cardetails_view',['key'=>$key,'id'=>$id]);
    }
}
