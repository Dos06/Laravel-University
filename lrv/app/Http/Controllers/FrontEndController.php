<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\Usr;
use App\Models\Post;
class FrontEndController extends Controller {
    public function searchNews(Request $req) {
        $posts = Post::where('title', 'like', '%' . $req->get('searchQuery') .
    '%' )->get();

        return json_encode($posts);
    }
}
