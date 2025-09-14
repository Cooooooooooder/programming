<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Requests\storeCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::select('id','name', 'image', 'is_showing', 'is_popular')->get();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.category.create');
    }

    /**
      *Store a newly created resource in storage.
     */
    public function store(storeCategoryRequest $request)
    {
        try{
            $validate = $request->validated();
            $category = new Category();

            $image = null;
            if($request-> hasfile('image' ))
            {
                $image = $request->file('image')->store('assets/uploads/categories', 'public');
            }

            $category -> name =['ar' => $request->name_ar, 'en' => $request->name_en];
            $category -> description =['ar' => $request->brief_ar, 'en' => $request->brief_en];
            $category -> meta_title =['ar' => $request->title_ar, 'en' => $request->title_en];
            $category -> meta_description =['ar' => $request->description_ar, 'en' => $request->description_en];
            $category-> slug = $request->slug;
            $category-> image = $image;
            $category-> is_showing = $request->has('is_showing') ? 1 : 0;
            $category-> is_popular = $request->has('is_popular') ? 1 : 0;
            $category-> meta_keywords  = $request->meta_keywords;
            $category -> save();
            toastr()->success(__('admin_sidebar_trans.success_message'));
            return redirect()->route('category.index');
        }catch(\Exception $e)
        {
            return redirect()->back()->withErrors(['Error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        try {
            // جيب الكاتيجوري من الـ DB
            $category = Category::findOrFail($id);

            // رجّع الـ view مع البيانات
            return view('admin.category.show', compact('category'));

        } catch (\Exception $e) {
            return redirect()->route('category.index')
                ->withErrors(['Error' => $e->getMessage()]);
        }
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id); // يرجع كاتيجوري واحد بس
        return view('admin.category.edit', compact('category')); // يبعته للـ view
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, $id)
{
    try {
        $validate = $request->validated();

        $category = Category::findOrFail($id);

        $data = [
            'name'             => ['ar' => $request->name_ar, 'en' => $request->name_en],
            'description'      => ['ar' => $request->brief_ar, 'en' => $request->brief_en],
            'meta_title'       => ['ar' => $request->title_ar, 'en' => $request->title_en],
            'meta_description' => ['ar' => $request->description_ar, 'en' => $request->description_en],
            'slug'             => $request->slug,
            'is_showing'       => $request->has('is_showing') ? 1 : 0,
            'is_popular'       => $request->has('is_popular') ? 1 : 0,
            'meta_keywords'    => $request->meta_keywords,
        ];

        // لو فيه صورة جديدة
        if ($request->hasFile('image')) {
            // امسح الصورة القديمة لو موجودة
            if ($category->image && \Storage::disk('public')->exists($category->image)) {
                \Storage::disk('public')->delete($category->image);
            }

            // خزّن الصورة الجديدة
            $image = $request->file('image')->store('assets/uploads/categories', 'public');
            $data['image'] = $image;
        }

        // تحديث البيانات
        $category->update($data);

        toastr()->success(__('admin_sidebar_trans.edit_message'));
        return redirect()->route('category.index');

    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['Error' => $e->getMessage()]);
    }
}




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    try {
        // جيب الكاتيجوري
        $category = Category::findOrFail($id);

        // لو فيه صورة امسحها من الـ storage
        if ($category->image && \Storage::disk('public')->exists($category->image)) {
            \Storage::disk('public')->delete($category->image);
        }

        // امسح الكاتيجوري نفسه
        $category->delete();

        // رسالة نجاح
        toastr()->success(__('admin_sidebar_trans.delete_message'));
        return redirect()->route('category.index');

    } catch (\Exception $e) {
        // لو حصل error
        return redirect()->back()->withErrors(['Error' => $e->getMessage()]);
    }
}

    }


