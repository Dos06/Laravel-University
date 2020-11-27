<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usr;
use App\Models\Category;
use App\Models\Post;

class DbController extends Controller {
    public function getAdmin() {
        return view('admin', ['users' => Usr::all(), 'categories' => Category::all(), 'posts' => Post::all()] );
    }

    public function getUsers() {
        return Usr::all();
    }
    public function getUser($id) {
        $user = new Usr;
        return view('profile', ['user' => $user->where('id', '=', $id)->get()] );
    }
    public function getUserByEmail($email) {
        $user = new Usr;
        // $id = Users::select('id')->where('name','sara')->first();
        return $user->where('email', '=', $email)->get()->first();
    }
    public function deleteUser(Request $req) {
        $id = $req->input('id');
        Usr::find($id)->delete();
        return redirect()->route('admin')->with('success', 'User was deleted');
    }
    public function editUser(Request $req) {
        $id = $req->input('id');
        $user = Usr::find($id);
        $user->email = $req->input('user_email');
        $user->name = $req->input('user_name');
        $user->surname = $req->input('user_surname');
        $user->picture_url = $req->input('user_pictureurl');
        $user->role = $req->input('user_role');

        $pass = $req->input('user_password');
        $oldpass = $req->input('user_oldpassword');
        $repass = $req->input('user_repassword');
        if ($user->password == $oldpass and $pass == $repass) {
            $user->password = $pass;
        }
        // $user->password = $req->input('user_password');
        // $user->password = $req->input('user_oldpassword');
        // $user->password = $req->input('user_repassword');


        $user->save();
        return redirect()->route('admin')->with('success', 'User was updated');
    }
    public function editUserProfile(Request $req) {
        $id = $req->input('id');
        $user = Usr::find($id);
        $user->email = $req->input('user_email');
        $user->name = $req->input('user_name');
        $user->surname = $req->input('user_surname');
        $user->picture_url = $req->input('user_pictureurl');
        $user->role = $req->input('user_role');

        $pass = $req->input('user_password');
        $oldpass = $req->input('user_oldpassword');
        $repass = $req->input('user_repassword');
        if ($user->password == $oldpass and $pass == $repass) {
            $user->password = $pass;
        }
        // $user->password = $req->input('user_password');
        // $user->password = $req->input('user_oldpassword');
        // $user->password = $req->input('user_repassword');

        $req->session()->put('currentUser', $user);

        $user->save();
        return redirect()->route('profile')->with('success', 'Profile was updated');
    }

    public function getCategories() {
        return Category::all();
    }
    public function getCategory($id) {
        $category = new Category();
        return view('news-details', ['category' => $category->where('id', '=', $id)->get()] );
    }
    public function deleteCategory(Request $req) {
        $id = $req->input('id');
        Category::find($id)->delete();
        return redirect()->route('admin')->with('success', 'Category was deleted');
    }
    public function addCategory(Request $req) {
        $category = new Category();
        $category->name = $req->input('category_name');
        $category->bg_color = $req->input('category_bgcolor');

        $category->save();
        return redirect()->route('admin')->with('success', 'Category was added');
    }
    public function editCategory(Request $req) {
        $id = $req->input('id');
        $category = Category::find($id);
        $category->name = $req->input('category_name');
        $category->bg_color = $req->input('category_bgcolor');

        $category->save();
        return redirect()->route('admin')->with('success', 'Category was updated');
    }

    public function getPosts() {
        return Post::all();
    }
    public function getPost($id) {
        $post = new Post;
        return view('news-details', ['post' => $post->where('id', '=', $id)->get()] );
    }
    public function deletePost(Request $req) {
        $id = $req->input('id');
        Post::find($id)->delete();
        return redirect()->route('admin')->with('success', 'Post was deleted');
    }
    public function addPost(Request $req) {
        $post = new Post();
        $post->title = $req->input('post_title');
        $post->short_content = $req->input('post_shortcontent');
        $post->content = $req->input('post_content');
        $post->likes = 0;
        $active = $req->input('post_active');
        if  ($active != null) {
            $post->active = 1;
        } else {
            $post->active = 0;
        }
        $post->category_id = $req->input('post_category_id');
        $post->author_id = $req->input('author_id');

        $pic = $req->input('post_pictureurl');
        if ($pic != null and $pic != '') {
            $post->picture_url = $pic;
        } else {
            $post->picture_url = '';
        }

        $post->save();
        return redirect()->route('admin')->with('success', 'Post was added');
    }
    public function addPostProfile(Request $req) {
        $post = new Post();
        $post->title = $req->input('post_title');
        $post->short_content = $req->input('post_shortcontent');
        $post->content = $req->input('post_content');
        $post->likes = 0;
        // $post->active = $req->input('post_active');
        $active = $req->input('post_active');
        if  ($active != null) {
            $post->active = 1;
        } else {
            $post->active = 0;
        }
        $post->category_id = $req->input('post_category_id');
        $post->author_id = $req->input('author_id');

        $pic = $req->input('post_pictureurl');
        if ($pic != null and $pic != '') {
            $post->picture_url = $pic;
        } else {
            $post->picture_url = '';
        }

        $post->save();
        return redirect()->route('profile')->with('success', 'Post was added');
    }
    public function editPost(Request $req) {
        $id = $req->input('id');
        $post = Post::find($id);
        $post->title = $req->input('post_title');
        $post->short_content = $req->input('post_shortcontent');
        $post->content = $req->input('post_content');
        $post->picture_url = $req->input('post_pictureurl');
        $post->likes = $req->input('post_likes');
        $active = $req->input('post_active');
        if  ($active != null) {
            $post->active = 1;
        } else {
            $post->active = 0;
        }
        $post->category_id = $req->input('post_category_id');
        $post->author_id = $req->input('author_id');

        $post->save();
        return redirect()->route('admin')->with('success', 'Post was updated');
    }
}
