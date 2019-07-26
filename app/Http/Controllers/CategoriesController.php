<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('admin.categories.index', [
            'categories' => Category::all(),
            'category'   => new Category()
        ]);
    }


    public function store(Request $request)
    {
        $this->validate($request, $this->rules());

        Category::create([
            'name'        => $request->name,
            'color'       => $request->color,
            'slug'        => empty($request->slug) ? str_slug($request->name) : $request->slug,
            'keywords'    => $request->keywords,
            'description' => $request->description,
            'color'       => $request->color,
            'parent_id'   => $request->parent_id
        ]);

        return redirect('/admin/categories')->with('success', "Category created.");
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/admin/categories');
    }

    public function update(Request $request, Category $category)
    {
        $this->validate($request, $this->rules());
        $category->update($request->all());
        return redirect("/admin/categories/$category->id")->with('success', 'Category updated');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    private function rules()
    {
        return [
            'name'  => 'required|unique:categories,name',
            'color' => 'required'
        ];
    }


}
