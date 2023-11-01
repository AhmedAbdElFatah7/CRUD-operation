<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function hello(){
    return '<h1>welcome world</h1>';
  }
  public function data(){
    return '<h1>welcome data world</h1>';
  }
    public function index(){
     $post = new Post ;
     $user = new User ;
      $postsFromDB = Post::all();
      return view('posts.test', ['posts'=> $postsFromDB ]);
    }
    public function view($post){
      $Db = Post::findOrFail($post);
      return view('posts.view', ['post' => $Db] );
  }
  public function create(){
    $postsFromDB = User::all();
     return view('posts.create',['user'=> $postsFromDB ]);
  }
  public function store(){
    $title=request()->title;
    $description=request()->description;
    $user_id=request()->user_id;
    $post = new Post;
    $post->title = $title;
    $post->description = $description;
    $post->user_id = $user_id;
    $post->save();
    return redirect(route('posts.index'));
  }
  public function edit($post){
    $Db = Post::findOrFail($post);
    $postsFromDB = User::all();
    return view('posts.edit', ['post' => $Db , 'user'=>$postsFromDB]);
  }
  public function update($post){
    $Db = Post::findOrFail($post);
    $Db->update([
      'title'=>request()->title,
      'description'=>request()->description,
      'user_id' => request()->user_id
    ]);
    return redirect(route('posts.index')); 
   }
   public function destroy($post){
    $Db = Post::findOrFail($post);
    $Db->delete();
    return redirect(route('posts.index')); 
   }
}