<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* *
        $posts = Post::paginate(2);
        return view('post.index',compact('posts'));
        */
        return view('post.index', [
            'posts' => Post::latest()->paginate(6),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create', ['post' => new Post()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        /* *
        $post = new Post;
        $post->title = $request->title;
        $post->slug = \Str::slug($request->title);
        $post->body= $request->body;
        // and ist very cool because simple to save
        $post->save();
        */

        /* * 
        // very cool post data
        Post::create([
            'title' => $request->title,
            'slug' => \Str::slug($request->title),
            'body' => $request->body,
        ]);
        */

        $attr = $request->all();

        // veri simple and cool store data
        // $post = $request->all();
        $attr['slug'] = \Str::slug(request('title'));
        Post::create($attr);


        // flash message
        session()->flash('success', 'The post was created');

        // to redirect after post to index
        return redirect()->to('posts');

        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }
    /* *
    public function show($slug)
    {
        $post = Post::where('slug',$slug)->fisrtOrfail();
        return view('post.show', compact('post'));
    }
    */

    /* *
    public function show($slug)
    {
        $post = \DB::table('posts')->where('slug',$slug)->fisrt();

        if(!$post){
            abort(404);
        }

        return view('post.show', compact('post'));
    }
    */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $attr = $request->all();

        $post->update($attr);

        // flash message
        session()->flash('success', 'The post was edited');

        // to redirect after post to index
        return redirect()->to('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        session()->flash('success', 'The post was deleted');

        return redirect()->to('posts');
    }
}
