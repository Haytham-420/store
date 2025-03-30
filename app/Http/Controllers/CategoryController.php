<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);
        return view("admin.categories.index", compact("categories"));
    }

    public function create()
    {
        return view("admin.categories.create");
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Create a new category
        $category = new Category;
        $category->name = $request->name;
        $category->save();

        return redirect()->back();
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view("admin.categories.edit", compact("category"));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Find the category and update it
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();

        return redirect('admin/categories');
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->back();
    }
}
