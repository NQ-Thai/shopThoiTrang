<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // public static $products = [
    //     ["id" => "1", "name" => "TV", "description" => "Best TV", "image" => "game.png", "price" => "1000"],
    //     ["id" => "2", "name" => "iPhone", "description" => "Best iPhone", "image" => "safe.png", "price" => "999"],
    //     ["id" => "3", "name" => "Chromecast", "description" => "Best Chromecast", "image" => "submarine.png", "price" => "30"],
    //     ["id" => "4", "name" => "Glasses", "description" => "Best Glasses", "image" => "game.png", "price" => "100"]
    // ];

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Sản phẩm - Shop thời trang";
        $viewData["subtitle"] = "Danh sách sản phẩm";
        $viewData["products"] = Product::all();
        return view('product.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product->getName() . " - Shop Thời Trang";
        $viewData["subtitle"] = $product->getName() . " - Thông tin sản phẩm";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }
}
