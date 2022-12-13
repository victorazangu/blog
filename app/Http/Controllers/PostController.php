<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth')->except(['index', 'show']);
    }



    public function index(Request $request){
        if($request->search){
            $posts = Post::where('title', 'like', '%' . $request->search . '%')
            ->orWhere('body', 'like', '%' . $request->search . '%')->latest()->paginate(4);
        } elseif($request->category){
            $posts = Category::where('name', $request->category)->firstOrFail()->posts()->paginate(3)->withQueryString();
        }
        else{
            $posts = Post::latest()->paginate(4);
        }

        $categories = Category::all();

        return view('posts.blog', compact('posts', 'categories'));


    }

    public function create(){
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }
    public function store(Request $request){
        
        $request->validate([
            'title' => 'required',
            'description'=>'required',
            'image' => 'required | image',
            'body' => 'required',
            'category_id' => 'required'
        ]);
        
        $title = $request->input('title');
        $description = $request->input('description');
        $category_id = $request->input('category_id');
        
        if(Post::latest()->first() !== null){
         $postId = Post::latest()->first()->id + 1;
        } else{
            $postId = 1;
        }
 
        $slug = Str::slug($title, '-') . '-' . $postId;
        $user_id = Auth::user()->id;
        $body = $request->input('body');
 
        //File upload
        $imagePath = 'storage/' . $request->file('image')->store('postsImages', 'public');
 
        $post = new Post();
        $post->title = $title;
        $post->description = $description;
        $post->category_id = $category_id;
        $post->slug = $slug;
        $post->user_id = $user_id;
        $post->body = $body;
        $post->imagePath = $imagePath;
 
        $post->save();
        
        return redirect()->back()->with('status', 'Post Created Successfully');
     }
     

     public function edit(Post $post){
        if(auth()->user()->id !== $post->user->id){
            abort(403);
        }
        return view('posts.edit', compact('post'));
    }


public function update(Request $request,  Post $post)
{
    if(auth()->user()->id !== $post->user->id){
        abort(403);
    }


    if (Post::where("id", $post->id)->exists()) {


        //find the Milestone with the specified id
        $post = Post::find($post->id);


        //update if updated value is empty(no value to be updated) retain the value in the database
        $post->title = !empty($request->title) ? $request->title : $post->title;
        $post->description = !empty($request->description) ? $request->description : $post->description;
        $post->category_id = !empty($request->category_id) ? $request->category_id : $post->category_id;
        $post->slug = !empty($request->slug) ? $request->slug : $post->slug;
        $post->user_id = !empty($request->user_id) ? $request->user_id : $post->user_id;
        $post->body = !empty($request->body) ? $request->body : $post->body;
        $post->imagePath = !empty($request->imagePath) ? $request->imagePath : $post->imagePath;
       

        //save the updates
        $post->save();

        return redirect()->back()->with('status', 'Post Edited Successfully');

    } 
}




    // public function show($slug){
    //     $post = Post::where('slug', $slug)->first();
    //     return view('blogPosts.single-blog-post', compact('post'));
    // }

    // Using Route model binding
    public function show(Post $post){
        $category = $post->category;

        $relatedPosts = $category->posts()->where('id', '!=', $post->id)->latest()->take(3)->get();
        return view('posts.show', compact('post', 'relatedPosts'));
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect()->back()->with('status', 'Post Delete Successfully');
    }
}
