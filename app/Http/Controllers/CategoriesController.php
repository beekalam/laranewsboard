<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('admin.categories.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required|unique:categories,name',
            'color' => 'required'
        ]);

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



}
