<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function index()
    {

        return view('posts.index', [
            'posts' => Post::latest()->paginate()
        ]);
    }

    public function create(Post $post)
    {

        return view('posts.create', ['post' => $post]);
    }



    public function store(Request $request)
    {
        // Valida que los campos title y body estén presentes en la solicitud
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $title = $request->title;
        $slug = Str::slug($title);

        $post = $request->user()->posts()->create([
            'title' => $title,
            'slug' => $slug,
            'body' => $request->body,
        ]);

        return redirect()->route('posts.edit', $post);
    }



    public function edit(Post $post)
    {

        return view('posts.edit', ['post' => $post]);
    }


    public function update(Request $request, Post $post)
    {
        // Valida que los campos title y body estén presentes en la solicitud
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $title = $request->title;
        $slug = Str::slug($title);

        $post->update([
            'title' => $title,
            'slug' => $slug,
            'body' => $request->body,
        ]);

        return redirect()->route('posts.edit', $post);
    }



    public function destroy(Post $post)
    {

        $post->delete();

        return back();
    }
}
