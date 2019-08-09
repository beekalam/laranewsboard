<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class OrderedListController extends Controller
{
	public function create(){
		return view('admin.ordered-list.create',[
            'categories' => Category::where('parent_id',0)->get()
		]);
	}
}
