<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Str;

class PostsController extends Controller
{

    /**
     * PostsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('admin.posts.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $attrs = $request->only('title', 'slug', 'category_id', 'subcategory_id', 'slug');//, 'summary', 'keywords');
        if (!$request->filled('slug')) {
            $attrs['slug'] = Str::slug($attrs['title']);
        }
        $attrs['user_id'] = auth()->id();
        Post::create($attrs);
        return redirect('/admin/posts/create')->with('message', 'Post created successfully.');
    }

}
