<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $posts = Post::all();
    return view ('blog.index' ,['posts' => $posts]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create new data
    return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request,[
            'title' => 'required',
            'description' => "required",
            ]);
    
    //create new data
    $post = new post;
    $post->title= $request->title;
    $post->description= $request->description;
    $post->save();
    return redirect()->route('blog.index')->with('alert-success', 'Data Hasbeen Saved');
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::findOrFail($id);
        //return to the edit view
        return view('blog.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validation
   $this->validate($request,[
            'title' => 'required',
            'description' => "required",
            ]);

   $post = Post::findOrFail($id);
   $post->title = $request->title;
   $post->description = $request->description;
   $post->save();

   return redirect()->route('blog.index')->with('alert-success', 'Data HAsbeen Saved!');
    }
     

/*
      public function viewPost()
    {
    $posts = Post::paginate(10);
   return view('post',compact('posts'));
    }
*/


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $post = Post::findOrFail($id);
    $post->delete();
    return redirect()->route('blog.index')->with('alert-success','Data Hasbeen saved!');
    }
}
