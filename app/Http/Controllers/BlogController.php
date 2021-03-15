<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class BlogController extends Controller
{
    public function index()
    {
            $post = Post::all();
            return view('blog.index')->with(['post'=>$post]);

    }
    public function store(Request $request)
    {
        Post::create([ 
            'id' => $request->id,
            'title' => $request->title,
            'body' => $request->body,
            'timestamp' => $request->timestamp
        ]);
        return back();
    }
    public function get_blog($id)
    {
        $post = Post::find($id);
        if($post == null )
            return response(['message'=>'Page you are looking for does not exists'],404);
        return view('blog.fortest')->with(['post'=>$post]);
    }
}


