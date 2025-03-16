<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view("admin.products.index", compact("products"));
    }


    public function create()
    {
        return view("admin.products.create");
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

    // /**
    //  * Show the form for editing the specified resource
    //  *
    //  * @param App\Models\Admin\Product $product;
    //  * @return \Illuminate\Contracts\View\View
    //  */
    public function edit($id)
    {
        $product = Product::find($id);
        return view("admin.products.edit", compact("product"));
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
        return redirect('products');
    }
    public function destroy($id) {
      Product::find($id)->delete();
      return redirect()->back();
    }
}
