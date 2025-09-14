<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::select('id', 'name')->get();
        return view('admin.products.index' , compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id', 'name')->get(); 
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    
   public function store(StoreProductRequest $request)
{
   
    $data = $request->all();

    // ✅ upload image (لو فيه صورة)
    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('assets/uploads/products', 'public');
    }

    // ✅ translatable fields
    $data['name'] = [
        'ar' => $request->name_ar,
        'en' => $request->name_en,
    ];
    $data['description'] = [
        'ar' => $request->description_ar,
        'en' => $request->description_en,
    ];
    $data['short_description'] = [
        'ar' => $request->brief_ar,
        'en' => $request->brief_en,
    ];
    $data['meta_description'] = [
        'ar' => $request->meta_description_ar,
        'en' => $request->meta_description_en,
    ];
    $data['meta_title'] = [
        'ar' => $request->title_ar,
        'en' => $request->title_en,
    ];

    // ✅ checkboxes
    $data['status'] = $request->has('status') ? 1 : 0;
    $data['trend']  = $request->has('trend') ? 1 : 0;

    // ✅ create product
    Product::create($data);

    toastr()->success(__('admin_sidebar_trans.success_message'));
    return redirect()->route('products.index');
}



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
