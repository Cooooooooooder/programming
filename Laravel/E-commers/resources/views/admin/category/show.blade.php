@extends('admin.master')
  @section('title')
      {{ __('admin_sidebar_trans.show') }}
  @endsection
@section('content')


<h1 class="text-center fw-bold py-3 my-0">
    {{ __('admin_sidebar_trans.showNewCategory') }}
</h1>



<div class="card shadow-sm border-bottom rounded p-4 mx-5">
  
    <div class="form-row">
      <!-- Arabic Name / English Name -->
      <div class="form-group col-md-6">
        <label for="name_ar">{{ __('admin_sidebar_trans.name_ar') }}</label>
        <input type="text" class="form-control " id="name_ar" name="name_ar" value="{{ $category->getTranslation('name', 'ar') }}" disabled>
        
      </div>
      <div class="form-group col-md-6">
        <label for="name_en">{{ __('admin_sidebar_trans.name_en') }}</label>
        <input type="text" class="form-control " id="name_en" name="name_en" value="{{ $category->getTranslation('name', 'en') }}" disabled>
        
      </div>
    </div>

    <div class="form-row">
      <!-- Slug / Image -->
      <div class="form-group col-md-6">
        <label for="slug">{{ __('admin_sidebar_trans.slug') }}</label>
        <input type="text" class="form-control " id="slug" name="slug" value="{{ $category -> slug }}" disabled>
      </div>
      <div class="form-group col-md-6">
        <label for="image">{{ __('admin_sidebar_trans.image') }}</label>

        {{-- عرض الصورة الحالية --}}
        @if($category->image)
            <div class="mb-2">
                <img src="{{ asset('storage/'.$category->image) }}" alt="{{ $category->image }}" 
                    style="max-width: 150px; max-height: 150px; object-fit: cover; border:1px solid #ccc; border-radius:8px;">
            </div>
        @endif
      </div>

    </div>

    <div class="form-row">
      <!-- Arabic Short / English Short -->
      <div class="form-group col-md-6">
        <label for="brief_ar">{{ __('admin_sidebar_trans.brief_ar') }}</label>
        <input type="text" class="form-control " id="brief_ar" name="brief_ar" value="{{ $category->getTranslation('description', 'ar') }}" disabled>
      </div>
      <div class="form-group col-md-6">
        <label for="brief_en">{{ __('admin_sidebar_trans.brief_en') }}</label>
        <input type="text" class="form-control " id="brief_en" name="brief_en" value="{{ $category->getTranslation('description', 'ar')}}" disabled>
      </div>
    </div>

    <div class="form-row">
  <div class="form-group col-md-6">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="is_showing" {{ $category->is_showing ? 'checked' : '' }} disabled>
      <label class="form-check-label" for="is_showing">{{ __('admin_sidebar_trans.is_showing') }}</label>
    </div>
  </div>
  <div class="form-group col-md-6">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="is_popular" {{ $category->is_popular ? 'checked' : '' }} disabled>
      <label class="form-check-label" for="is_popular">{{ __('admin_sidebar_trans.is_popular') }}</label>
    </div>
  </div>
</div>

    <div class="form-row">
      <!-- Arabic Title / English Title -->
      <div class="form-group col-md-6">
        <label for="title_ar">{{ __('admin_sidebar_trans.title_ar') }}</label>
        <input type="text" class="form-control " id="title_ar" name="title_ar" value="{{ $category->getTranslation('meta_title', 'ar') }}" disabled>
      </div>
      <div class="form-group col-md-6">
        <label for="title_en">{{ __('admin_sidebar_trans.title_en') }}</label>
        <input type="text" class="form-control " id="title_en" name="title_en" value="{{ $category->getTranslation('meta_title', 'en') }}" disabled>
      </div>
    </div>

    <div class="form-row">
      <!-- Arabic Description / English Description -->
      <div class="form-group col-md-6">
        <label for="description_ar">{{ __('admin_sidebar_trans.description_ar') }}</label>
        <textarea class="form-control " id="description_ar" name="description_ar" rows="3" disabled>{{ $category->getTranslation('meta_description', 'ar') }}</textarea>
      </div>
      <div class="form-group col-md-6">
        <label for="description_en">{{ __('admin_sidebar_trans.description_en') }}</label>
        <textarea class="form-control " id="description_en" name="description_en" rows="3" disabled>{{ $category->getTranslation('meta_description', 'en') }}</textarea>
      </div>
    </div>

   <div class="form-row">
  <!-- Primary Key (full width) -->
    <div class="form-group col-md-12">
      <label for="meta_keywords">{{ __('admin_sidebar_trans.meta_keywords') }}</label>
      <input type="text" class="form-control " id="meta_keywords" name="meta_keywords" value="{{ $category -> meta_keywords}}" disabled>
    </div>
  </div>
  <br>
  

  
</div>

@endsection