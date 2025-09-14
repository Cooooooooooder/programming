<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{

    use HasTranslations;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'is_showing',
        'is_popular',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
    
    public array $translatable = ['name' , 'description' , 'meta_title', 'meta_description'];

}
