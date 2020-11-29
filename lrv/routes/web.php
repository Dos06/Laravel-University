<?php

use App\Http\Controllers\DbController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Post;
use App\Models\Usr;

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

Route::get('/news', [NewsController::class, 'allNews'])->name('news');

Route::get('/news/category/{category_id}', [NewsController::class, 'filterNews'])->name('filterNews');
Route::get('/news/{id}', [DbController::class, 'getPost'])->name('news-details');

Route::post('/news/search', [FrontEndController::class, 'searchNews'])->name('search-news');
Route::post("login",[LoginController::class, "login"]);
Route::get('/profile', function () {
    return view('profile', ['categories' => Category::all(), 'posts' => Post::orderBy('created_at', 'desc')->get()]);
})->name('profile');

Route::post('/profile/edit', [DbController::class, 'editUserProfile'])->name('user-edit-profile');
Route::post('/profile/post/add', [DbController::class, 'addPostProfile'])->name('post-add-profile');
Route::post('/profile/post/delete', [DbController::class, 'deletePostProfile'])->name('post-delete-profile');
Route::post('/profile/post/edit', [DbController::class, 'editPostProfile'])->name('post-edit-profile');

// LOGIN
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login/signup', [LoginController::class, 'registration'])->name('signup');

Route::post('/login/signin', [LoginController::class, 'login'])->name('signin');

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
