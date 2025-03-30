<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class FrontController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $category = $request->input('category');
        $categories = Category::all();

        if ($category) {
            $products = Product::where('category_id', $category)->get();
        } else {
            $products = Product::all();
        }

        return view('home.index', compact('products', 'categories', 'category'));
    }
}
