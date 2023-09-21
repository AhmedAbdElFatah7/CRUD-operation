@extends('layouts.app')
@section('content')
  <div class="card">
  <div class="card-header">
    post info
  </div>
  <div class="card-body">
    <h5 class="card-title">Title:- {{$post['title']}}</h5>
    <h5 class="card-title">ID :- {{$post['id']}} </h5>
    <h5 class="card-title">description :- {{$post['description']}} </h5>
  </div>
</div>
@endsection