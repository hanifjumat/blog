<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Session;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate(5);
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('posts.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request,array(
                'title'=>'required|max:255',
                'body'=>'required',
                'slug'=>'required|alpha_dash|min:5|max:255',
                'category_id'=>'required|integer'

            ));

        //store to the database

        $post = new Post;
        $post -> title = $request ->title;
        $post -> body = $request ->body;
        $post -> slug = $request ->slug;
        $post -> category_id = $request ->category_id;
        $post->save();
        Session::flash('success','The blog post was successfully save');
        //redirect to another page
        return redirect()->route('posts.show',$post ->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        $cats = array();
        foreach($categories as $category){
            $cats[$category->id] = $category->name;
        }
        return view('posts.edit')->withPost($post)->withCategories($cats); 
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
        //validate the data
        $post = Post::find($id);
        if($request->input('slug')==$post->slug){
            $this->validate($request,array(
                'title'=>'required|max:255',
                'body'=>'required',
                'category_id'=>'required|integer'

            ));
        }else{
            $this->validate($request,array(
                'title'=>'required|max:255',
                'body'=>'required',
                'slug'=>'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'category_id'=>'required|integer'

            ));
        }

        //find the data in the database
        $post = Post::find($id);
        $post -> title = $request ->input('title');
        $post -> body = $request ->input('body');
        $post -> slug = $request ->input('slug');
        //save the data to the database
        $post->save();

        Session::flash('success','The blog post was successfully updated');
        //redirect to another page
        return redirect()->route('posts.show',$post ->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        Session::flash('success','The blog post was successfully deleted');
        return redirect()->route('posts.index');
    }
}
