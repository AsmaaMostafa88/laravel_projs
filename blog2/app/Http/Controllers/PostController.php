<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        $posts=Post::all();
        return view("index",compact('posts'));
    }



    public function create(){
        return view("create");
    
    }



    public function store(Request $request){
       //validation
       $request->validate([
        'title' => 'required|unique:posts|max:255',
        'posted_by'=>'required'
    ]);
        post::create(
            [
            'title'=>$request->title,
            'created_at' =>$request->created_at,
            'updated_at'=>$request->updated_at,
            'posted_by'=>$request->posted_by
            ]    
        );
        return redirect('/posts');
    }




    public function show($id){
      $post=Post::find($id);
      return view("show",compact('post'));
    }




    public function edit($id){
        $post=Post::find($id);
        return view("edit",compact('post'));
      }



    public function update(Request $request,$id){
          $post=Post::find($id);
          $post->title=$request->title;
          $post->posted_by=$request->posted_by;
          $post->created_at=$request->created_at;
          $post->save();
          return redirect('/posts');
        
    }




      public function destroy($id){
        Post::destroy($id);
        return redirect('/posts');
      }
}
