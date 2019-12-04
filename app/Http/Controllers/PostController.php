<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use \Carbon\Carbon;

class PostController extends Controller
{
    public function all(){
        $tasks = Post::with('comments')->get();
        return response()->json($tasks);
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'content'=>'required'
        ]);
        //this is a bit lazy of me
        $req = $request;
        $req->time=Carbon::now()->timestamp;
        $post = Post::create($req->all());
        return response()->json($post);
    }

    public function like(Post $post, Request $request){
        $request->validate([
            'type'=>'required'
        ]);
        if ($request->type=='+'){
            $post->increment('likes');
        }
        else $post->decrement('likes');
    }
}
