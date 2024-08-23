<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function(){
    return view('home',['title' => 'Home Page']);
});
Route::get('about', function () {
    return view('about', ['name'=>'Hilmi Anugrah','title' => "About"]);
});

Route::get('/posts', function(){
    // $posts = Post::with(['author','category'])->latest()->get();
    return view('posts', ['title' => 'Blog', 'posts'=> Post::filter(request(['search','category', 'author']))->latest()->paginate(5)->withQueryString()]);
});

Route::get('/posts/{post:slug}', function(Post $post){
        return view('post',['title'=>'Single Post', 'post' => $post, 'author' => $post->author, 'category' => $post->category]);
});
Route::get('/author/{user:username}', function(User $user){
        return view('posts',['title' => count($user->posts) . ' Article By ' . $user->name, 'posts' => $user->posts]);    
});
Route::get('/category/{category:slug}', function(Category $category){
    // $posts = $category->posts->load('category', 'author'); 
        return view('posts',['title' => count($category->posts) . ' Category ' . $category->title, 'posts' => $category->posts]);    
});
Route::get('/contact', function(){
    return view('contact',['title' => 'Contact']);
});