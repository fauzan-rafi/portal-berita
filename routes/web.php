<?php

use Illuminate\Support\Facades\Route;

// membuat active state

// ketika kita akan passing data tanpa controler
// Route::get('/', function(){
//     // menerima request dari url
//     // return request('name');
//     // $name = request('name');
//     // return view('home',['name' => $name]);
// });
// ---------------------------------------------------------------------- //


// ketika akan mempassing data melalui controller
// Route::get('/', 'HomeController@index');

// membuat invokable method, ketika tidak ada method lain dalam controller
Route::get('/', 'HomeController');
// ------------------------------------------------------------------------
Route::get('posts', 'PostController@index');


// routes for insert data
Route::get('posts/create', 'PostController@create');
Route::post('posts/store', 'PostController@store');

// routes for update data
Route::get('posts/{post:slug}/edit', 'PostController@edit');
Route::patch('posts/{post:slug}/edit', 'PostController@update');

// routes for delete data
Route::delete('posts/{post:slug}/delete','PostController@destroy');

// membuat slug / route wilcard
// Route::get('posts/{post}', 'PostController@show');
// mengambil data dari tabel post dengan parameter static key
Route::get('posts/{post:slug}', 'PostController@show');

// ------------------------------------------------------------------------



Route::get('category/{category:slug}', 'CategoryController@show');


Route::view('contact','contact');
Route::view('about','about');
Route::view('login','login');

