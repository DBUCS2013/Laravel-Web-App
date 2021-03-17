<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    function allPosts()
    {
        return view('posts');
    }
    function addPostView(){
        return view('add-post');
    }
    function createPost(Request $req)
    {
        $post = new Post();
        $post->title = $req->title;
        $post->body = $req->body;
        $post->save();//
        return redirect('posts');

    }
    function getPosts()
    {
        $posts = Post::paginate(2);
        return view('posts',['posts'=>$posts]);
    }
    function getPostById($id)
    {
        $post = Post::where('id',$id)->first();
        return view('single-post',compact('post'));
    }
    function editPost($id)
    {
        $post = Post::find($id);
        return view('edit-post',compact('post'));
    }
    function updatePost(Request $request)
    {
        $post = Post::find($request->id);
        $post->title= $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect('posts');
    }
    function deletePost($id)
    {
        Post::where('id',$id)->delete();
        return redirect('posts');
    }
}
