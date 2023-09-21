@extends('layouts.app')
@section('content')
<form action="{{route('posts.store')}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">title</label>
    <input type="text" name="title" class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">description</label>
    <input type="text" class="form-control" name="description">
  </div>
  <div class="form-group">
    <label >user </label>
    <select name="user_id" >
    @foreach($user as $user)
    <option value="{{$user['id']}}">{{$user['name']}}</option>
    @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-success">create post</button>
</form>
@endsection