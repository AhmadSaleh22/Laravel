<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index(){

    // get all posts
        $posts =  Post::all();

        return view("viewPost")->with([
            "allPosts" => $posts
        ]);
    }

    public function create(){
        return view('createPost');
    }

    public function add(Request $request){

        Post::create([
            'title' => $request->title,
            'description' => $request->desc
        ]);


        return redirect('/posts');

    }

}
