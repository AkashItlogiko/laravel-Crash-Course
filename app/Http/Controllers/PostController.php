<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
 public function create(){
    return view('create');
 }

 public function ourfilestore(Request $request){

 $validated=$request->validate([
   'name'=>'required ',
   'description'=>'required',
   'image'=>'nullable|jpeg,png',
]);  
 

   $post =new Post;
   $post->name=$request->name;
   $post->description=$request->description;
   $post->image=$request->image;
   
   $post->save();
   return redirect()->route('home')->with('success','Item successfully created!');
 }

}
