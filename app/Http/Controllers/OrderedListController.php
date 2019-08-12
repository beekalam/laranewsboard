<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\PostOrderedListItem;
use Illuminate\Http\Request;

class OrderedListController extends Controller
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
        $fields['subcategory_id'] = $request->subcategory_id;
        $fields['user_id'] = auth()->id();
        $fields['post_type'] = 'ordered_list';
        $post = Post::create($fields);
        $post->addPostTags(explode(',', trim($request->tags)));
        return redirect('/admin/ordered-list')->with('success', 'Ordered List created successfully');
    }


    public function create_ordered_list_item(Post $post)
    {
        if ($post->orderedListItems->count() == 0) {
            PostOrderedListItem::create([
                'post_id' => $post->id,
                'title' => '',
                'content' => ''
            ]);
        }
        return view('admin.ordered-list.item-create', [
            'categories' => Category::where('parent_id', 0)->get(),
            'post'       => $post,
        ]);
    }

    public function store_ordered_list_item(Post $post, PostOrderedListItem $postOrderedListItem)
    {
       dump('in func');
    }
}
