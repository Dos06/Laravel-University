<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Usr;
use App\Models\Post;

class NewsController extends Controller {
    public function filterNews($id) {
        $pppost = new Post;
        $posts = Post::where('category_id','=', $id)->where('active', '=', '1')->simplePaginate(4);
        $top_posts = $pppost->where('active', '=', '1')->where('top', '=', '1')->orderBy('created_at', 'desc')->take(3)->get();


        return view('news',['posts' => $posts, 'categories' => Category::all(), 'top_posts' => $top_posts, 'users' => Usr::all(), 'comments' => Comment::all()]);
    }

    public function allNews() {
        $posts = Post::where('active', '=', '1')->orderBy('created_at', 'desc')->simplePaginate(4);
        $top_posts = Post::where('active', '=', '1')->where('top', '=', '1')->orderBy('created_at', 'desc')->take(3)->get();

        return view('news', ['categories' => Category::all(), 'posts' => $posts, 'top_posts' => $top_posts, 'users' => Usr::all(), 'comments' => Comment::all()]);
    }
}
