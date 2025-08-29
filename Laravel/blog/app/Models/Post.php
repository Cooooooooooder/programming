<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'description' , 'user_id'];

    public function user()
    {
        return $this -> belongsto(User::class);
    }

    public function postCreator()
    {
        return $this -> belongsto(User::class , 'user_id');
    }
}
