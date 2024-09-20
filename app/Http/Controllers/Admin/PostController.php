<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Request $request,User $user)
    {
        $posts = Post::all();
        return response()->json($posts);
    }
    public function store(Post $post, Request $request) {
        $post->create([
            'title' => $request->title, 
            'body' => $request->body,
            'author_id' => auth('sanctum')->user()->id
        ]);
        return response()->json('created succesffully');
    }
    public function delete(Post $post, Request $request)
    {
        $post->delete($post);
        return response()->json('delete was successfully');
    }
}
