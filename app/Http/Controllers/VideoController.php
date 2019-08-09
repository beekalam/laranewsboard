<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class VideoController extends Controller
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
        return view('admin.video.create', [
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
        $fields['post_type'] = 'video';
        Post::create($fields);
        return redirect('/admin/video')->with('success', 'video created successfully');
    }
}
