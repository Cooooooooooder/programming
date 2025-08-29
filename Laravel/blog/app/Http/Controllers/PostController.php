<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
class PostController extends Controller
{

    public function index()
    {
        // select all from posts
        $postsFromDB = Post::all();   
        return view('posts.index' , ['posts' => $postsFromDB] ) ;
    }
    


    public function show(Post $post)
    {
        
        // select all from posts where id = $postid;
        // $singlePostFromDB = Post::findOrFail($postid);
        // if(is_null($singlePostFromDB))
        // {
        //     return to_route("posts.index");
        // }
        return view('posts.show' , ['post' => $post] );
    }



    public function create()
    {

        $usersFromDB = User::all();
        return view('posts.create' , ['users' => $usersFromDB]);
    }



    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:5'],
            'select' => ['required' , 'exists:users,id']
        ]);
    
        $title = request() -> title;
        $description = request() -> description;
        $select = request() -> select;
        
        // $post = new Post;
        // $post -> title = $title;
        // $post -> description = $description;
        // $post->save();

        Post::create([
            'title' => $title , 
            'description' => $description ,
            'user_id' => $select,
        ]);

        return to_route('posts.index' );
    }



    public function edit(Post $post)
    {
         $usersFromDB = User::all();
        return view('posts.edit' , ['post' => $post , 'users' => $usersFromDB] );
    }



    public function update($postid)
    {
        request() ->  validate([
            'title' => ['required','min:3'],
            'description' => ['required','min:5'],
            'select' => ['required' , 'exists:users,id']
        ]);
        request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:5'],
            'select' => ['required' , 'exists:users,id']
        ]);
        $title = request() -> title;
        $description = request() -> description;
        $select = request() -> select;

        $post = Post::find($postid);
        $post->title = $title;
        $post->description = $description;
        $post->user_id = $select;
        $post->save();

        return to_route('posts.show' , ['post' => $postid]);
    }



    public function destroy($postid)
    {
        // $post = Post::find($postid);
        // $post -> delete();
        Post::where('id' , $postid) -> delete();

        return to_route('posts.index');
    }


}

// convention over configuration
// convention over configuration