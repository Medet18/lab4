<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//1
use App\Models\Post;

class BlogController extends Controller
{
    public function index(){
        $post = Post::all();

        return view('blog.index')->with(['post' => $post]);
    }
    //2
    public function store(Request $request){
       // dd($request);
       Post::create([
           'title'=> $request->title,
           'body'=> $request->body
       ]);

       return back();
    }
    //lab6 was changing
    public function get_post($id){
        $post = Post::find($id);

        if($post == null)
            return response(['message'=> 'client not found'], 404);

    
            return view('blog.detail')->with(['post'=>$post]);   
    }
}
