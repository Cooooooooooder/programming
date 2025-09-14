@extends('admin.master')
  @section('title')
      {{ __('admin_sidebar_trans.edit') }}
  @endsection
@section('content')


<h1 class="text-center fw-bold py-3 my-0">
    {{ __('admin_sidebar_trans.editNewCategory') }}
</h1>



<div class="card shadow-sm border-bottom rounded p-4 mx-5">
  <form method="POST" action="{{route('category.update',$category->id )}}"  enctype="multipart/form-data" >
    @CSRF
    @method('PATCH')
    <div class="form-row">
      <!-- Arabic Name / English Name -->
      <div class="form-group col-md-6">
        <label for="name_ar">{{ __('admin_sidebar_trans.name_ar') }}</label>
        <input type="text" class="form-control @error('name_ar') is-invalid @enderror" id="name_ar" name="name_ar" value="{{ old('name_ar', $category->getTranslation('name', 'ar')) }}" >
        @error('name_ar') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="name_en">{{ __('admin_sidebar_trans.name_en') }}</label>
        <input type="text" class="form-control @error('name_en') is-invalid @enderror" id="name_en" name="name_en" value="{{ old('name_en', $category->getTranslation('name', 'en')) }}">
        @error('name_en') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
    </div>

    <div class="form-row">
      <!-- Slug / Image -->
      <div class="form-group col-md-6">
        <label for="slug">{{ __('admin_sidebar_trans.slug') }}</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $category -> slug) }}">
        @error('slug') <div class="invalid-feedback">{{ $message }}</div> @enderror
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

        {{-- اختيار صورة جديدة --}}
          <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image" value="{{ old('image', $category -> image) }}">
          @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>

    </div>

    <div class="form-row">
      <!-- Arabic Short / English Short -->
      <div class="form-group col-md-6">
        <label for="brief_ar">{{ __('admin_sidebar_trans.brief_ar') }}</label>
        <input type="text" class="form-control @error('brief_ar') is-invalid @enderror" id="brief_ar" name="brief_ar" value="{{ old('brief_ar', $category->getTranslation('description', 'ar')) }}">
        @error('brief_ar') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="brief_en">{{ __('admin_sidebar_trans.brief_en') }}</label>
        <input type="text" class="form-control @error('brief_en') is-invalid @enderror" id="brief_en" name="brief_en" value="{{ old('brief_en', $category->getTranslation('description', 'ar')) }}">
        @error('brief_en') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
    </div>

    <div class="form-row">
      <!-- State / Public -->
      <div class="form-group col-md-6">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="is_showing" name="is_showing" {{($category-> is_showing == 1) ? 'checked': ''}}>
          <label class="form-check-label" for="is_showing">{{ __('admin_sidebar_trans.is_showing') }}</label>
        </div>
      </div>
      <div class="form-group col-md-6">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="is_popular" name="is_popular"
       {{($category-> is_popular == 1) ? 'checked': ''}}>
          <label class="form-check-label" for="is_popular">{{ __('admin_sidebar_trans.is_popular') }}</label>
        </div>
      </div>
    </div>

    <div class="form-row">
      <!-- Arabic Title / English Title -->
      <div class="form-group col-md-6">
        <label for="title_ar">{{ __('admin_sidebar_trans.title_ar') }}</label>
        <input type="text" class="form-control @error('title_ar') is-invalid @enderror" id="title_ar" name="title_ar" value="{{ old('title_ar', $category->getTranslation('meta_title', 'ar')) }}" >
        @error('title_ar') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="title_en">{{ __('admin_sidebar_trans.title_en') }}</label>
        <input type="text" class="form-control @error('title_en') is-invalid @enderror" id="title_en" name="title_en" value="{{ old('title_en', $category->getTranslation('meta_title', 'en')) }}">
        @error('title_en') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
    </div>

    <div class="form-row">
      <!-- Arabic Description / English Description -->
      <div class="form-group col-md-6">
        <label for="description_ar">{{ __('admin_sidebar_trans.description_ar') }}</label>
        <textarea class="form-control @error('description_ar') is-invalid @enderror" id="description_ar" name="description_ar" rows="3">{{ old('description_ar', $category->getTranslation('meta_description', 'ar')) }}</textarea>
        @error('description_ar') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="description_en">{{ __('admin_sidebar_trans.description_en') }}</label>
        <textarea class="form-control @error('description_en') is-invalid @enderror" id="description_en" name="description_en" rows="3">{{ old('description_en',$category->getTranslation('meta_description', 'en')) }}</textarea>
        @error('description_en') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
    </div>

   <div class="form-row">
  <!-- Primary Key (full width) -->
    <div class="form-group col-md-12">
      <label for="meta_keywords">{{ __('admin_sidebar_trans.meta_keywords') }}</label>
      <input type="text" class="form-control @error('meta_keywords') is-invalid @enderror" id="meta_keywords" name="meta_keywords" value="{{old('meta_keywords', $category -> meta_keywords)}}">
      @error('meta_keywords') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
  </div>
  <br>
  <div class="form-row">
    <!-- Button (aligned left) -->
    <div class="form-group col-md-12 d-flex justify-content-start">
      
      <button type="submit" class="btn btn-primary btn-lg px-5">
        {{ __('admin_sidebar_trans.edit') }}
      </button>
    </div>
  </div>

  </form>
</div>

@endsection