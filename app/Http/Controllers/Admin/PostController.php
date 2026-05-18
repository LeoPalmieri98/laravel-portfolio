<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view("posts/index", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        $types = Type::all();
        $technologies = Technology::all();
        return view("posts/create", compact("types", "technologies"));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newPost = new Post();
        $newPost->title = $data["title"];
        $newPost->author = $data["author"];
        $newPost->type_id = $data["type_id"];
        $newPost->content = $data["content"];
        $newPost->save();

        if ($request->has("technologies")) {
            $newPost->technologies()->attach($data["technologies"]);
        }

        return redirect()->route("posts.show", $newPost);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //dd($post->technologies);
        return view("posts/show", compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $types = Type::all();
        $technologies = Technology::all();
        return view("posts.edit", compact("post", "types", "technologies"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->all();
        $post->title = $data["title"];
        $post->author = $data["author"];
        $post->type_id = $data["type_id"];
        $post->content = $data["content"];
        $post->update();

        if ($request->has("technologies")) {
            $post->technologies()->sync($data["technologies"]);
        } else {
            $post->technologies()->detach();
        }


        return redirect()->route("posts.show", $post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route("posts.index");
    }
}
