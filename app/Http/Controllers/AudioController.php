<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;

class AudioController extends Controller
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
        return view('admin.audio.create', [
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
        $fields['post_type'] = 'audio';
        Post::create($fields);
        return redirect('/admin/video')->with('success', 'Audio post created successfully');
    }
}
