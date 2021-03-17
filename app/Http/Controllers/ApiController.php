<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class ApiController extends Controller
{
    /*
        This function returns the all posts rows 
    */
    public function index(Request $request)
    {
        $posts = Post::all();
        return response($posts,200);
    }
    /*
        Return posts with appropriate id number
    */
        public function get_posts(Request $request)
        {
            $post_id = Post::find($request->post_id);
            if($post_id == null)
            {
                return response(['message' => 'There is no posts you are looking for'],404);   
            }
            return response($post_id,200);
        }
}
