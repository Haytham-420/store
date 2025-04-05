<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $category = Category::find($id);

        // Check if the category has products
        if ($category->products()->count() > 0) {
            return redirect()->back()->withErrors(['error' => 'لا يمكن حذف الصنف لأنه يحتوي على منتجات مرتبطة به.']);
        }

        $category->delete();
        return redirect()->back()->with('success', 'تم حذف الصنف بنجاح.');
    }
}
