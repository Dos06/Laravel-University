<?php

use App\Http\Controllers\DbController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/innovation', function () {
    return view('innovation');
})->name('innovation');

Route::get('/admission', function () {
    return view('admission');
})->name('admission');

Route::get('/news', function () {
    $pppost = new Post;
    // $posts = Post::all();
    $posts = $pppost->orderBy('created_at', 'desc')->get();
    $posts1 = array();
    $posts2 = array();
    for ($i = 0; $i < count($posts); $i += 2) {
        array_push($posts1, $posts[$i]);
    }
    for ($i = 1; $i < count($posts); $i += 2) {
        array_push($posts2, $posts[$i]);
    }

    return view('news', ['categories' => Category::all(), 'posts1' => $posts1, 'posts2' => $posts2]);
})->name('news');

Route::get('/news-details', function () { // /{id}
    return view('news-details', ['categories' => Category::all(), 'post' => Post::find(1)]);
})->name('news-details');

// $post->where('name', '=', 'Dos')

// Route::post('/news/search', ['as' => 'search-news', 'uses' => 'FrontEndController@searchNews']);
Route::post('/news/search', [FrontEndController::class, 'searchNews'])->name('search-news');
Route::post("login",[LoginController::class,"login"]);
// Route::get('/logout',function(){
//     if(session()->has('currentUser')){
//         session()->pull('currentUser');

//     }
//     redirect('home');
// });
Route::get('/profile', function () {
    return view('profile', ['categories' => Category::all(), 'posts' => Post::all()]);
})->name('profile');

Route::post('/profile/edit', [DbController::class, 'editUserProfile'])->name('user-edit-profile');
Route::post('/profile/post/add', [DbController::class, 'addPostProfile'])->name('post-add-profile');

// LOGIN
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login/signup', [LoginController::class, 'registration'])->name('signup');

Route::post('/login/signin', [LoginController::class, 'login'])->name('signin');

// Route::post('/login/signin', function () {
//     dd(Request::all());
// })->name('signin');

Route::get('/login/signout', function () {
    if(session()->has('currentUser')){
        session()->pull('currentUser');

    }
    return redirect('/');
})->name('signout');


// ADMIN
Route::get('/admin', [DbController::class, 'getAdmin'] )->name('admin');

Route::post('/admin/category/add', [DbController::class, 'addCategory'])->name('category-add');
Route::post('/admin/category/delete', [DbController::class, 'deleteCategory'])->name('category-delete');
Route::post('/admin/category/edit', [DbController::class, 'editCategory'])->name('category-edit');

Route::post('/admin/post/add', [DbController::class, 'addPost'])->name('post-add');
Route::post('/admin/post/delete', [DbController::class, 'deletePost'])->name('post-delete');
Route::post('/admin/post/edit', [DbController::class, 'editPost'])->name('post-edit');

Route::post('/admin/user/delete', [DbController::class, 'deleteUser'])->name('user-delete');
Route::post('/admin/user/edit', [DbController::class, 'editUser'])->name('user-edit');



// Route::post('/subscribe', function () {
//     return view('index');
// })->name('subscribe');
