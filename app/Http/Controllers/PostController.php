<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->filter(request(['search']))->get();

        return view('dashboard.posts.index', [
            "title" => "Posts",
            "posts" => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all(),
            'title' => 'Create Post',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:100',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'body' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png|file|max:1024'
        ]);

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->storePublicly('posts', 'public');
        }

        Post::create($validateData);

        return redirect('/dashboard/posts')->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => Post::findOrFail($post->id),
            'title' => 'Post Detail',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => Post::findOrFail($post->id),
            'categories' => Category::all(),
            'title' => 'Edit Post',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:100',
            'category_id' => 'required',
            'body' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png|file|max:1024'
        ];

        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validateData = $request->validate($rules);

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->storePublicly('posts', 'public');
        }

        $post = Post::findOrFail($post->id);
        $post->title = $validateData['title'];
        if ($request->slug != $post->slug) $post->slug = $validateData['slug'];
        $post->category_id = $validateData['category_id'];
        $post->body = $validateData['body'];
        $post->user_id = $validateData['user_id'];
        $post->excerpt = $validateData['excerpt'];
        if ($request->file('image')) $post->image = $validateData['image'];
        $post->save();

        return redirect('/dashboard/posts')->with('success', 'Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Post deleted successfully!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
