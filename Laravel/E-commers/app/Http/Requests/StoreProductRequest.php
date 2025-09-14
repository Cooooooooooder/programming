<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'name_ar' => 'required',
        'name_en' => 'required',
        'slug' => 'required',
        'brief_ar' => 'required',
        'brief_en' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp',
        'status' => 'nullable',
        'trend' => 'nullable',
        'title_ar' => 'required',
        'title_en' => 'required',
        'description_ar' => 'required',
        'description_en' => 'required',
        'meta_keywords' => 'required',
        'price' => 'required|numeric',
        'selling_price' => 'required|numeric',
        'qty' => 'required|integer',
        'tax' => 'required|numeric',
        'meta_description_ar' => 'required',
        'meta_description_en' => 'required',

        ];
    }
}