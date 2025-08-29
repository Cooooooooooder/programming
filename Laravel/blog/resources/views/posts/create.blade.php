@extends('layouts.app')

@section('title')
    Create
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="{{route('posts.store')}}" method="POST">
    @csrf
    <div class="mb-3">
    <label  class="form-label">Title</label>
    <input name='title' type="text" class="form-control" value="{{old('title')}}" >
    </div>

    <div class="mb-3">
    <label  class="form-label">Description</label>
    <textarea name='description' class="form-control"  rows="3" >{{old('description')}}</textarea>
    </div>

    <div class="mb-3">
        <label  class="form-label">Post Creator</label>
        <select name='select' class="form-select" >
            @foreach($users as $user)
                <option value="{{$user -> id}}">{{$user -> name}}</option>
            @endforeach
        </select>
    </div>
    
  
    <div> 
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>
@endsection