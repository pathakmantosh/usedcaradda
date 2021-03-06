<?php

namespace App\Controllers;
use App\Models\Products;
use CodeIgniter\Config\Config;
use CodeIgniter\Controller;
use App\Libraries\Utilities;
helper('number');
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
        $pro_detail = new Products();
        $data['id'] = $id;
        $data['key'] = $key;
        $data['product'] = $pro_detail->product_detail($data);
        
        if($data['product'][0]['product_alias_name'] == $id){
            $data['product']['image'] = $pro_detail->product_image(['pro_id' => $data['product'][0]['pro_id'], 'product_alias_name' => $data['product'][0]['product_alias_name']]);
        }
        return view('cardetails_view',$data);
    }
    public function usedcar()
    {
        return view('usedcar_view');
    }
    public function category()
    {
        return view('category_view');
    }
}
