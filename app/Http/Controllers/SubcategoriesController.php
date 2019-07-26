<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class SubcategoriesController extends Controller
{
    public function index()
    {
        return view('admin.subcategories.index', [
            'subcategories'    => Category::subCategories()->get(),
            'subCategory'      => new Category(),
            'parentCategories' => Category::parentCategories()->get(),
        ]);
    }

    public function store(Request $request, Category $category)
    {
        $this->validate($request, $this->rules());
        Category::create($request->all());
        return redirect('/admin/subcategories')->with('success', 'Subcategory created.');
    }

    private function rules()
    {
        return [
            'name'      => 'required|unique:categories,name',
            'color'     => 'required',
            'parent_id' => 'exists:categories,id'
        ];
    }
}
