<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $latest_post = Post::latest()->first();
        return view('index')->with('latest_posts', $latest_post);
    }
}
