<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function home()
    {
        return view('index');
    }


    public function index()
    {
        // Retrieve All DB Data From Post Table
        $allPostsFromDB = Post::all(); //Collection Object

        return view('posts.index', ['posts' => $allPostsFromDB]);
    }

    public function create()
    {
        $users = User::all(); //Collection Object
        return view('posts.create', ['users' => $users]);
    }

    public function show(Post $post) // Model + dynamic routing {post}
    {
        // dd($post);
        // $singlePostFromDB = Post::findOrFail($post);
        // $singlePostFromDB = Post::where('id', $postId)->firstOrFail();
        // $singlePostFromDB = Post::where('id', $postId)->get();
        // dd($singlePostFromDB);
        return view('posts.show', ['post' => $post]);
    }

    public function store(Request $request)
    {
        #Data Validation
        $validated = $request->validate([
            'title' => ['required', 'unique:posts', 'min:3', 'max:50',],
            'description' => ['required', 'min:8', 'max:255'],
            'user_id' => ['required', 'exists:users,id'],
        ]);

        Post::create($validated);
        // dd($data);
        return redirect()->route('posts.index')->with('success', "Post Created successfully");
    }

    public function edit(Post $post)
    {
        $users = User::all(); //Collection Object
        // dd($post);
        return view('posts.edit', ['post' => $post, 'users' => $users]);
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => [
                'required',
                'min:3',
                'max:50',
                Rule::unique('posts', 'title')->ignore($post->id),
            ],
            'description' => ['required', 'min:8', 'max:255'],
            'user_id' => ['required', 'exists:users,id'],
        ]);

        $post->update($validated);
        return redirect()->route('posts.show', $post->id)->with('success', 'Post updated successfully');
    }


    // TRY / CATCH method
    public function destroy(Post $post)
    {
        try {
            $post->delete();
            return redirect()
                ->route('posts.index')
                ->with('success', 'Post Deleted Successfully');
        } catch (\Exception $e) {
            // dd($e);
            return redirect()
                ->route('posts.index')
                ->with('error', 'Something Went Wrong');
        }
    }
}