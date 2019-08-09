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

    public function index()
    {
        return view('admin.posts.index', [
            'posts'     => Post::paginate(10),
            'title'     => "Posts",
            'list_type' => 'test',
        ]);
    }

    public function create()
    {
        return view('admin.posts.create', [
            'categories' => Category::where('parent_id', 0)->get()
        ]);
    }

    public function store(Request $request)
    {
        $fields = $request->validate([
            'title'       => 'required',
            'category_id' => 'required'
        ]);
        $fields['slug'] = $request->filled('slug') ? $request->slug : Str::slug($request->title);
        $fields['subcategory_id'] = $request->subcategory_id;
        $fields['user_id'] = auth()->id();
        $fields['post_type'] = 'post';
        Post::create($fields);
        return redirect('/admin/posts/create')->with('message', 'Post created successfully.');
    }

}
