<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\Category;
use App\Models\Usr;
use App\Models\Post;

class NewsController extends Controller {
    public function filterNews($id) {
        $pppost = new Post;
        $posts = Post::where('category_id','=', $id)->where('active', '=', '1')->simplePaginate(4);
        $top_posts = $pppost->where('active', '=', '1')->where('top', '=', '1')->orderBy('created_at', 'desc')->take(3)->get();


        return view('news',['posts' => $posts, 'categories' => Category::all(), 'top_posts' => $top_posts, 'users' => Usr::all()]);
    }

    public function allNews() {
        // $pppost = new Post;
        // $posts = $pppost->->get();
        // $posts1 = array();
        // $posts2 = array();
        // for ($i = 0; $i < count($posts); $i += 2) {
        //     array_push($posts1, $posts[$i]);
        // }
        // for ($i = 1; $i < count($posts); $i += 2) {
        //     array_push($posts2, $posts[$i]);
        // }

        // $top_posts = $pppost->where('active', '=', '1')->where('top', '=', '1')->orderBy('created_at', 'desc')->take(3)->get();

        // return view('news', ['categories' => Category::all(), 'posts1' => $posts1, 'posts2' => $posts2, 'top_posts' => $top_posts, 'users' => Usr::all()]);


        $posts = Post::where('active', '=', '1')->orderBy('created_at', 'desc')->simplePaginate(4);
        $top_posts = Post::where('active', '=', '1')->where('top', '=', '1')->orderBy('created_at', 'desc')->take(3)->get();

        return view('news', ['categories' => Category::all(), 'posts' => $posts, 'top_posts' => $top_posts, 'users' => Usr::all()]);
    }
}
