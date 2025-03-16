<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view("admin.categories.index", compact("categories"));
    }

    public function create()
    {
        return view("admin.categories.create");
    }



    public function store(Request $request)
    {
        $category = new Category;

        $category->name = $request->name;

        $category->save();

        return redirect()->back();
    }


    // /**
    //  * Show the form for editing the specified resource
    //  *
    //  * @param App\Models\Admin\Category $category;
    //  * @return \Illuminate\Contracts\View\View
    //  */
    public function edit($id)
    {
        $category = Category::find($id);
        return view("admin.categories.edit", compact("category"));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        $category->name = $request->name;

        $category->save();

        return redirect('categories');
    } 

    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->back();
    }
}
