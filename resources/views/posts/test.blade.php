@extends('layouts.app')
@section('content')

 <a href="{{route('posts.create')}}"><button type="button" class="btn btn-success">create post</button></a>
  <table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Posted By</th>
      <th scope="col">Created</th>
      <th scope="col">Actions </th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post['id']}}</th>
      <td>{{$post['title']}}</td>
      <td> {{$post->user->name}}</td>
      <td>{{$post['updated_at']->format('y-m-d')}}</td>
      <td>
      <!-- <a href="http://localhost/example-app/public/posts/{{$post['id']}}"> <button type="button" class="btn btn-info">View</button></a> -->
      <a href="{{route('posts.view',$post->id)}}"> <button type="button" class="btn btn-info">View</button></a>
      <a href="{{route('posts.edit',$post->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>
      <form style="display:inline;" action="{{route('posts.destroy',['post'=>$post->id])}}" method="post">
      @csrf
      @method('delete')
      <button type="submit" class="btn btn-danger">Delete</button>
      </form>
      
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection