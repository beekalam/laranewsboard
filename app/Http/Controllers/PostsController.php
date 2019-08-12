<?php

namespace App\Http\Controllers;

use App\Category;
use App\Image;
use App\Post;
use App\PostImage;
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
        $post = Post::create($fields);
        foreach ($request->additional_post_image_id as $imageId) {
            $image = Image::where('id', $imageId)->first();
            if ($image) {
                PostImage::create([
                    'post_id'       => $post->id,
                    'image_big'     => $image->image_big,
                    'image_default' => $image->image_default
                ]);
            }
        }
        return redirect('/admin/posts/create')->with('message', 'Post created successfully.');
    }

}
