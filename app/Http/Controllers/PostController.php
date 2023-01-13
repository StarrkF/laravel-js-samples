<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){
        $posts=Post::get();
        return view('pages.modals.index')->with('posts',$posts);
    }


    public function show($id){
        return response()->json(Post::find($id));
    }

    public function update(Request $request){
        $update=Post::where('id',$request->post_id)->update([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title),
            'content'=>$request->content,
            'priority'=>$request->priority
        ]);

        return $update
        ? back()->with('success','POST Update Successful')
        : back()->with('error','POST Update failed');
    }
}
