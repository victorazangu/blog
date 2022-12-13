<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $posts = Post::latest()->where('user_id',auth()->user()->id)->paginate(4);;
        $categories = Category::all();
        return view('dashboard', compact('posts','categories'));
    }
}
