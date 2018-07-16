<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function getBack(){
        return view('backend/home/index');
    }

    public function getCate(){
        return view('backend/category/index');
    }

    public function getProduct(){
        return view('backend/product/index');
    }

    public function getOrder(){
        return view('backend/order/index');
    }

    public function getShopconfig(){
        return view('backend/shopconfig/index');
    }

    public function getUserconfig(){
        return view('backend/userconfig/index');
    }

    public function getHome(){
        return view('backend/home/index');
    }
    
}
