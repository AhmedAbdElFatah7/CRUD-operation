@extends('layouts.app')
@section('content')
<form action="{{route('posts.update',['post'=> $post->id])}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
    <label for="exampleInputEmail1">title</label>
    <input type="text" name="title" class="form-control" value="{{$post->title}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">description</label>
    <input type="text" class="form-control" name="description" value="{{$post->description}}">
  </div>
  <div class="form-group">
    <label >user </label>
    <select name="user_id" >
    @foreach($user as $user)
    <option value="{{$user['id']}}" @if($user->id == $post-> user_id ) selected @endif>{{$user['name']}}</option>
    @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">update post</button>
</form>
@endsection