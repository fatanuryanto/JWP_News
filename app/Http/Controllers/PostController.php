<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::with(['comment','user'])->get();
        return view('home',['posts'=>$posts]);
    }

    public function search(Request $request)
    {
        $posts = Post::where('title','like',"%".$request->search_key."%")->paginate();
        return view('search',['posts' => $posts]);
    }


    public function store(Request $request){
        Post::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'user_id'=>Auth::user('')->id,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post=Post::with(['user','comment'])->find($id);
        return view('post',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post=Post::with(['user'])->find($id);
        return view('edit',['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Post::find($id)->update([
            'title'=>$request->title,
            'description'=>$request->description
        ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
