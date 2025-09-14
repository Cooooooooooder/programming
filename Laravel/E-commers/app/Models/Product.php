<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Product extends Model
{
    use HasTranslations;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'short_description',
        'description',
        'price',
        'selling_price',
        'image',
        'qty',
        'tax',
        'status',
        'trend',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ]; 	
    public array $translatable = ['name' ,'short_description','description','meta_description','meta_title'];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
}
