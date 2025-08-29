@extends('layouts.app')

@section('title')
  index
@endsection 

@section('content')



    <div class="text-center">
      
           <a href="{{route('posts.create')}}" class="btn btn-primary">Create Post</a>
    </div>

  
    <table class="table mt-4">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Title</th>
          <th scope="col">Posted By</th>
          <th scope="col">Create At</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>

      @foreach($posts as $post)
      <tbody>
        <tr>
          <th scope="row">{{$post -> id}}</th>
          <td>{{$post -> title}}</td>
          <td>{{ $post -> user? $post -> user -> name : 'Not Found'}}</td>
          <td>{{$post -> created_at->addDays(35) -> format('Y-m-d')}}</td>
          <td>
              <a class="btn btn-primary" href="{{route('posts.show' , $post -> id  )}}" role="button">View</a>
              <a class="btn btn-warning" href="{{route('posts.edit' ,$post -> id)}}" role="button">Edit</a>

              <form style='display: inline;' action="{{route('posts.destroy' ,$post -> id)}}" method='POST' onsubmit="return confirmDelete()"> 
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type='submit' >Delete</delete>
              </form>

          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
@endsection

