<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Post_likeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/user', UserController::class);

Route::resource('/categories', CategoriesController::class);

Route::resource('/post', PostController::class);

Route::resource('/post_likes', Post_likeController::class);


//dashboard
Route::get('/categories', function () {
    return view('manage-categories');
}); 
Route::get('/users', function () {
    return view('manage-users');
}); 
Route::get('/category', function () {
    return view('category-posts');
});
Route::get('/addcategory', function () {
    return view('add-category');
});
Route::get('/editcategory', function () {
    return view('edit-category');
});
Route::get('/addpost', function () {
    return view('add-post');
});
Route::get('/adduser', function () {
    return view('add-user');
});
Route::get('/post', function () {
    return view('post');
});
Route::get('/editpost', function () {
    return view('edit-post');
});
Route::get('/edituser', function () {
    return view('edit-user');
});
Route::get('/gridsystem', function () {
    return view('grid-system');
});


//landingpage

Route::get('/beranda', function () {
    return view('hero');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/servis', function () {
    return view('services');
});
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/signup', function () {
    return view('signup');
});

