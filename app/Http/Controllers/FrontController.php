<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->input('category');
        $categories = Category::all();

        if ($category) {
            $products = Product::where('category_id', $category)->paginate(9)->appends(['category' => $category]);
        } else {
            $products = Product::paginate(9);
        }

        return view('home.index', compact('products', 'categories', 'category'));
    }
}
