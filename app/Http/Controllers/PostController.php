<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate(10);
        $categories = Category::orderBy('id','desc')->get();
        $tags = Tag::orderBy('id','desc')->get();

        return view('website.auth.posts.index', compact('posts', 'categories', 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('id','desc')->get();
        $tags = Tag::orderBy('id','desc')->get();

        return view('website.auth.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move(public_path('images/'), $filename);
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'nullable|string',
        ]);
        $post = new Post;
        $post->name = $request->input('name');
        $post->slug = Str::of($request->name)->slug('-');

        $post->description = $request->input('description');
        $post->category_id = $request->input('category_id');
        $post->image = $filename;


        $post->save();
        $post->tags()->sync($request->tags, false);



        return Redirect::to('posts');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
