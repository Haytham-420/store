<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class ProductController extends Controller
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
            $products = Product::where('category_id', $category)->paginate(10)->appends(['category' => $category]);
        } else {
            $products = Product::paginate(10);
        }

        // $products = Product::paginate(10);
        return view("admin.products.index", compact('products', 'categories', 'category'));
    }


    public function create()
    {
        $categories = Category::all();
        return view("admin.products.create", compact("categories"));
    }



    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->category_id = $request->category;
        $product->description = $request->description;

        $product->save();
        return redirect()->back();
    }

    public function show(Product $product)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->category_id = $request->category;
        $product->description = $request->description;

        $product->save();
        return redirect('admin/products');
    }
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->back();
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'LIKE', "%{$query}%")->paginate(9);
        $products->appends(['query' => $query]); // Append the search query to the pagination links
        return view('home.index', [
            'products' => $products,
            'categories' => Category::all(),
            'category' => null // No specific category is selected during a search
        ]);
    }
}
