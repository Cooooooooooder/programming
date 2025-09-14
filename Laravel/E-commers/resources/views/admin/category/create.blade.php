@extends('admin.master')
  @section('title')
      {{ __('admin_sidebar_trans.create') }}
  @endsection
@section('content')


<h1 class="text-center fw-bold py-3 my-0">
    {{ __('admin_sidebar_trans.createNewCategory') }}
</h1>



<div class="card shadow-sm border-bottom rounded p-4 mx-5">
  <form method='POST' action="{{ route('category.store') }}" enctype="multipart/form-data" >
    @CSRF
    <div class="form-row">
      <!-- Arabic Name / English Name -->
      <div class="form-group col-md-6">
        <label for="name_ar">{{ __('admin_sidebar_trans.name_ar') }}</label>
        <input type="text" class="form-control @error('name_ar') is-invalid @enderror" id="arabicName" name="name_ar" value="{{ old('name_ar') }}" required>
        @error('name_ar') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="name_en">{{ __('admin_sidebar_trans.name_en') }}</label>
        <input type="text" class="form-control @error('name_en') is-invalid @enderror" id="englishName" name="name_en" value="{{ old('name_en') }} " required>
        @error('name_en') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
    </div>

    <div class="form-row">
      <!-- Slug / Image -->
      <div class="form-group col-md-6">
        <label for="slug">{{ __('admin_sidebar_trans.slug') }}</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}">
        @error('slug') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="image">{{ __('admin_sidebar_trans.image') }}</label>
        <input type="file" 
              class="form-control-file @error('image') is-invalid @enderror" 
              id="image" 
              name="image" >
        @error('image') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
      </div>

    </div>

    <div class="form-row">
      <!-- Arabic Short / English Short -->
      <div class="form-group col-md-6">
        <label for="brief_ar">{{ __('admin_sidebar_trans.brief_ar') }}</label>
        <input type="text" class="form-control @error('brief_ar') is-invalid @enderror" id="arabicShort" name="brief_ar" value="{{ old('brief_ar') }}">
        @error('brief_ar') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="brief_en">{{ __('admin_sidebar_trans.brief_en') }}</label>
        <input type="text" class="form-control @error('brief_en') is-invalid @enderror" id="englishShort" name="brief_en" value="{{ old('brief_en') }}">
        @error('brief_en') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
    </div>

    <div class="form-row">
      <!-- State / Public -->
      <div class="form-group col-md-6">
        <div class="form-check">
            <input class="form-check-input "  type="checkbox" id="state" name="is_showing" value="{{ old('is_showing') }}">
            <label class="form-check-label" for="is_showing">{{ __('admin_sidebar_trans.is_showing') }}</label>
            @error('is_showing') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
      </div>
      <div class="form-group col-md-6">
        <div class="form-check">
            <input class="form-check-input " type="checkbox" id="public" name="is_popular" value="{{ old('is_popular') }}">
            <label class="form-check-label" for="is_popular">{{ __('admin_sidebar_trans.is_popular') }}</label>
            @error('is_popular') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
      </div>
    </div>

    <div class="form-row">
      <!-- Arabic Title / English Title -->
      <div class="form-group col-md-6">
        <label for="title_ar">{{ __('admin_sidebar_trans.title_ar') }}</label>
        <input type="text" class="form-control @error('title_ar') is-invalid @enderror" id="arabicTitle" name="title_ar" value="{{ old('title_ar') }}">
        @error('title_ar') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="title_en">{{ __('admin_sidebar_trans.title_en') }}</label>
        <input type="text" class="form-control @error('title_en') is-invalid @enderror" id="englishTitle" name="title_en" value="{{ old('title_en') }}">
        @error('title_en') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
    </div>

    <div class="form-row">
      <!-- Arabic Description / English Description -->
      <div class="form-group col-md-6">
        <label for="description_ar">{{ __('admin_sidebar_trans.description_ar') }}</label>
        <textarea class="form-control @error('description_ar') is-invalid @enderror" id="arabicDescription" name="description_ar"  rows="3">{{ old('description_ar') }}</textarea>
        @error('description_ar') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="description_en">{{ __('admin_sidebar_trans.description_en') }}</label>
        <textarea class="form-control @error('description_en') is-invalid @enderror" id="englishDescription" name="description_en" rows="3">{{ old('description_en') }}</textarea>
        @error('description_en') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
    </div>

    <div class="form-row">
        <!-- Primary Key (full width) -->
        <div class="form-group col-md-12">
            <label for="meta_keywords">{{ __('admin_sidebar_trans.meta_keywords') }}</label>
            <input type="text" class="form-control @error('meta_keywords') is-invalid @enderror" id="primaryKey" name="meta_keywords" value="{{ old('meta_keywords') }}">
            @error('meta_keywords') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
    </div>

    <br>
    
    <div class="form-row">
    <!-- Button (aligned left) -->
        <div class="form-group col-md-12 d-flex justify-content-start">
            
            <button type="submit" class="btn btn-primary btn-lg px-5">
            {{ __('admin_sidebar_trans.Save') }}
            </button>
        </div>
    </div>
  </form>
</div>

@endsection