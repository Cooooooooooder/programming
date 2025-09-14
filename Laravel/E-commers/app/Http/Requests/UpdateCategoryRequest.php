<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'slug' => 'nullable',
            'brief_ar' => 'required|string',
            'brief_en' => 'required|string',
            'image' => 'nullable',
            'is_showing' => 'nullable',
            'is_popular' => 'nullable',
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'description_ar' => 'required|string',
            'description_en' => 'required|string',
            'meta_keywords' => 'required|string',
        ];
    }
}
