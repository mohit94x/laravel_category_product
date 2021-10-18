<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category = Category::get();
        return view('home',compact('category'));
    }
    
    public function category(){
        $categories = Category::get();
        return view('category-product',compact('categories'));
    }
    public function search_product(Category $category){
        $products = Product::whereCategory($category->id)->get();
        return view('products',compact('products'));
    }
}
