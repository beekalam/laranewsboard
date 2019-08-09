<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class GalleryController extends Controller
{
    
     /**
     * OrderedListController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('admin.ordered-list.create', [
            'categories' => Category::where('parent_id', 0)->get()
        ]);
    }

    public function store(Request $request)
    {
        $fields = $request->validate([
            'title'       => 'required',
            'category_id' => 'required'
        ]);
        $fields['slug'] = $request->filled('slug') ? $request->slug : str_slug($request->title);
        $fields['user_id'] = auth()->id();
        $fields['post_type'] = 'gallery';
        Post::create($fields);
        return redirect('/admin/ordered-list')->with('success','Ordered List created successfully');
    }
}
