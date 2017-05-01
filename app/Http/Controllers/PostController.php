<?php
/**
 * Created by PhpStorm.
 * User: gavlak
 * Date: 01/05/2017
 * Time: 19:23
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::all();

        return response()->json($posts);
    }

    public function show(Request $request, $slug)
    {
        $post = Post::where("slug", $slug)->first();

        return response()->json($post);
    }

    public function create(Request $request)
    {
        $post = Post::create($request->all());

        return response()->json($post);
    }

    public function update(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->first();

        $post->fill($request->all());
        $post->save();

        return response()->json($post);
    }

    public function destroy(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->first();
        $post->delete();
    }
}