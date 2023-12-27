<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)


    {
        return view('home' , [

            'featuredPost' => Post::take(3)->Published()->featured()->latest('published_at')->get(),

            'LatestPost' => Post::Published()->featured()->latest('published_at')->get()->take(9),
        ]);

    }
}
