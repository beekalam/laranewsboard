<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Str;

class PostsController extends Controller
{

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
            'categories' => Category::where('parent_id', 0)->get(),
            'post'       => new Post()
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
        $fields['page_content'] = $request->content;
        $fields['post_type'] = 'post';
        $post = Post::create($fields);
        $post->addPostImages(request('additional_post_image_id'));
        $post->addPostTags(explode(',', trim($request->tags)));
        return redirect('/admin/posts/create')->with('message', 'Post created successfully.');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'categories' => Category::where('parent_id', 0)->get(),
            'post'       => $post
        ]);
    }

    public function update(Post $post)
    {
        // $fields = request()->validate([
        //     'title'       => 'required',
        //     'category_id' => 'required'
        // ]);
        $post->update([
            'title'          => request('title'),
            'slug'           => request('slug') ? request('slug') : Str::slug(request('title')),
            'category_id'    => request('category_id'),
            'subcategory_id' => request('subcategory_id'),
            'user_id'        => auth()->id(),
            'page_content'   => request('page_content')
        ]);
        return redirect()->back();
    }

}
