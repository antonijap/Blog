<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;

class PostsController extends Controller
{
    // Show all posts
    public function home() {
      $posts = Post::paginate(2);
      return view('home', compact('posts'));
    }

    // Get single post
    public function showSinglePost(Post $post) {
      return view('singlePost', compact('post'));
    }
}
