<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function selectable(){
        $posts=Post::get();
        return view('pages.tables.selectable')->with('posts',$posts);
    }
}
