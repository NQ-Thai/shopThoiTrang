<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Trang chủ - Shop Thời Trang";
        return view('home.index')->with("viewData", $viewData);
    }
    public function about(){
        $viewData = [];
        $viewData["title"] = "Thông tin về chung tôi - Shop Thời Trang";
        $viewData["subtitle"] = "Thông tin về chúng tôi";
        $viewData["description"] = "This is an about page ...";
        $viewData["author"] = "Developed by: Nguyen Quang Thai";
        return view('home.about')->with("viewData", $viewData);
    }
        
}
