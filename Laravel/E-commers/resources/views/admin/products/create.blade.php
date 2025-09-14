@extends('admin.master')
  @section('title')
      {{ __('admin_sidebar_trans.create') }}
  @endsection
@section('content')


<h1 class="text-center fw-bold py-3 my-0">
    {{ __('admin_sidebar_trans.createNewProduct') }}
</h1>

 	 	 		 	 	 	 	 	 	 	 	 	
<div class="card shadow-sm border-bottom rounded p-4 mx-5">
  <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
    @csrf
    
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="category_id">{{ __('admin_sidebar_trans.category') }}</label>
          <select class="form-control @error('category_id') is-invalid @enderror" 
                  id="category_id" 
                  name="category_id" 
                  required>
              <option value="">{{ __('admin_sidebar_trans.chooseCategory') }}</option>
              @foreach($categories as $category)
                  <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }} >
                      {{ $category->name }}
                  </option>
              @endforeach
          </select>
          @error('category_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
    </div>

    <div class="form-row">
      <!-- Arabic Name / English Name -->
      <div class="form-group col-md-6">
        <label for="name_ar">{{ __('admin_sidebar_trans.name_ar') }}</label>
        <input type="text" class="form-control @error('name_ar') is-invalid @enderror" id="name_ar" name="name_ar" value="{{ old('name_ar') }}" >
        @error('name_ar') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="name_en">{{ __('admin_sidebar_trans.name_en') }}</label>
        <input type="text" class="form-control @error('name_en') is-invalid @enderror" id="name_en" name="name_en" value="{{ old('name_en') }}" required>
        @error('name_en') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
    </div>

    <div class="form-row">
      <!-- Slug / Image -->
      <div class="form-group col-md-6">
        <label for="slug">{{ __('admin_sidebar_trans.slug') }}</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" required> 
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
        <input type="text" class="form-control @error('brief_ar') is-invalid @enderror" id="arabicShort" name="brief_ar" value="{{ old('brief_ar') }}" required>
        @error('brief_ar') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="brief_en">{{ __('admin_sidebar_trans.brief_en') }}</label>
        <input type="text" class="form-control @error('brief_en') is-invalid @enderror" id="englishShort" name="brief_en" value="{{ old('brief_en') }}" required>
        @error('brief_en') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
    </div>


    <div class="form-row">
      <!-- Arabic Description / English Description -->
      <div class="form-group col-md-6">
        <label for="description_ar">{{ __('admin_sidebar_trans.description_ar') }}</label>
        <textarea class="form-control @error('description_ar') is-invalid @enderror" id="arabicDescription" name="description_ar"  rows="3" required>{{ old('description_ar') }}</textarea>
        @error('description_ar') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="description_en">{{ __('admin_sidebar_trans.description_en') }}</label>
        <textarea class="form-control @error('description_en') is-invalid @enderror" id="englishDescription" name="description_en" rows="3" required>{{ old('description_en') }}</textarea>
        @error('description_en') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
    </div>


    <div class="form-row">
      <!-- State / Public -->
      <div class="form-group col-md-6">
        <div class="form-check">
            <input class="form-check-input "  type="checkbox" id="status" name="status" >
            <label class="form-check-label" for="status">{{ __('admin_sidebar_trans.status') }}</label>
           
        </div>
      </div>
      <div class="form-group col-md-6">
        <div class="form-check">
            <input class="form-check-input " type="checkbox" id="trend" name="trend" >
            <label class="form-check-label" for="trend">{{ __('admin_sidebar_trans.trend') }}</label>
           
        </div>
      </div>
    </div>


    <div class="form-row">
      <!-- Slug / Image -->
      <div class="form-group col-md-6">
        <label for="price">{{ __('admin_sidebar_trans.price') }}</label>
        <input type="number" class="form-control @error('price') is-invalid @enderror" step="0.01" id="price" name="price" value="{{ old('price') }}" required>
        @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="selling_price">{{ __('admin_sidebar_trans.selling_price') }}</label>
        <input type="number" class="form-control @error('selling_price') is-invalid @enderror" step="0.01" id="selling_price" name="selling_price" value="{{ old('selling_price') }}" required>
        @error('selling_price') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>

    </div>


    <div class="form-row">
      <!-- Slug / Image -->
      <div class="form-group col-md-6">
        <label for="qty">{{ __('admin_sidebar_trans.qty') }}</label>
        <input type="number" class="form-control @error('qty') is-invalid @enderror" step="1" id="qty" name="qty" value="{{ old('qty') }}" required>
        @error('qty') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="tax">{{ __('admin_sidebar_trans.tax') }}</label>
        <input type="number" class="form-control @error('tax') is-invalid @enderror" step="0.01" id="tax" name="tax" value="{{ old('tax') }}" required>
        @error('tax') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
    </div>

    <div class="form-row">
      <!-- Arabic Title / English Title -->
      <div class="form-group col-md-6">
        <label for="title_ar">{{ __('admin_sidebar_trans.title_ar') }}</label>
        <input type="text" class="form-control @error('title_ar') is-invalid @enderror" id="arabicTitle" name="title_ar" value="{{ old('title_ar') }}" required>
        @error('title_ar') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="title_en">{{ __('admin_sidebar_trans.title_en') }}</label>
        <input type="text" class="form-control @error('title_en') is-invalid @enderror" id="englishTitle" name="title_en" value="{{ old('title_en') }}" required>
        @error('title_en') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
    </div>

    <div class="form-row">
      <!-- Arabic Description / English Description -->
      <div class="form-group col-md-6">
        <label for="meta_description_ar">{{ __('admin_sidebar_trans.meta_description_ar') }}</label>
        <textarea class="form-control @error('meta_description_ar') is-invalid @enderror" id="meta_description_ar" name="meta_description_ar"  rows="3" required>{{ old('meta_description_ar') }}</textarea>
        @error('meta_description_ar') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="meta_description_en">{{ __('admin_sidebar_trans.meta_description_en') }}</label>
        <textarea class="form-control @error('meta_description_en') is-invalid @enderror" id="meta_description_en" name="meta_description_en" rows="3" required>{{ old('meta_description_en') }}</textarea>
        @error('meta_description_en') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
    </div>

    <div class="form-row">
        <!-- Primary Key (full width) -->
        <div class="form-group col-md-12">
            <label for="meta_keywords">{{ __('admin_sidebar_trans.meta_keywords') }}</label>
            <input type="text" class="form-control @error('meta_keywords') is-invalid @enderror" id="primaryKey" name="meta_keywords" value="{{ old('meta_keywords') }}" required>
            @error('meta_keywords') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
    </div>



    
    <br>
    <div class="form-row">
    <!-- Button (aligned left) -->
        <div class="form-group col-md-12 d-flex justify-content-start">
            
            <button type="submit" class="btn btn-primary btn-lg px-5">
            {{ __('admin_sidebar_trans.save') }}
            </button>
        </div>
    </div>
  </form>
</div>

@endsection