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
}
