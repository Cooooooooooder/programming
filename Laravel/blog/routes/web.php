<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts' , [PostController::class , 'index']) -> name('posts.index');

Route::get('/posts/create/' , [PostController::class , 'create']) -> name('posts.create') ;

Route::POST('/posts' , [PostController::class , 'store']) -> name('posts.store');

Route::get('/posts/{post}' ,[PostController::class , 'show']) -> name('posts.show');

Route::get('/posts/{post}/edit' ,[PostController::class , 'edit'] ) -> name('posts.edit');

Route::PUT('/posts/{post}' , [PostController::class , 'update']) -> name('posts.update');

Route::DELETE('/posts/{post}' , [PostController::class , 'destroy']) -> name('posts.destroy'); 

//  1- define anew route for the main page
//  2- define a controller the render the view
//  3- define the view of the posts
//  4- roll the html page posts
//  5- dynamic the view

// 1- create route for view
// 2- create the view page (show.blade.php)
// 3- relate the route with the page 
// 4- add the params in the controller method
// 5- relate the method with the route 
// 6- create the dynamic the route

// 1- create route for creation 
// 2- create the controller metiod for the creation page
// 3- create the page itself and it's content
// 4- route the method with the page 

// 1- create route for edit
// 2- create the shortcut of the route
// 3- create the method in the controller
// 4- return the view of the edit page
// 5- make the page of edit
// 6- relate the updated data for the database


// 0- relate the index of button delete with the route
// 1- create route for destroy
// 2- create the shortcut for the destroy
// 3- create the method destroy in the controller
// 4- return the method to the index 

