<?php

namespace App\Http\Controllers;

use App\Category;
use App\Image;
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


    public function new_ordered_list_item(Post $post)
    {
        PostOrderedListItem::create([
            'post_id' => $post->id,
            'title'   => '',
            'content' => ''
        ]);
        
        return redirect(route('ordered-list.create', $post));
    }

    public function create_ordered_list_item(Post $post)
    {
        return view('admin.ordered-list.item-create', [
            'categories' => Category::where('parent_id', 0)->get(),
            'post'       => $post,
        ]);
    }

    public function store_ordered_list_item(Post $post, PostOrderedListItem $item)
    {
        $fields = request()->only('title', 'content', 'image_description', 'item_order');
        $image = Image::where('id', request('image_id'))->first();
        if ($image) {
            $fields['image'] = $image->image_big;
            $fields['image_large'] = $image->image_default;
        }
        $item->update($fields);
        return redirect(route('ordered-list.create', $post));
    }
}
