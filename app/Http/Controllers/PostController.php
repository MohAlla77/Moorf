<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){
        return view("posts.index",[

                           'posts' => Post::take(5)->get()

        ]);
    }

    public function show(Post $post){

        return view('posts.show',[
            'post' => $post
        ] );
    }
}
