<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//1
use App\Models\Post;


class ApiPostController extends Controller
{
    //This function return that all client rows
    //1
    public function index(Request $request){
        $post2 = Post::all();

        return response($post2, 200);
    }
    //Return client with client_id
    //2
    public function get_post(Request $request){
        $post = Post::find($request-> post_id);

        if($post == null){
            return response(['message' => 'There is no client'], 404);
        }

        return response($post,200);
    }
}
