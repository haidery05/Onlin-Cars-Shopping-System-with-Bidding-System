<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostController extends Controller
{
    public function list_post()
    {
    	$posts = Post::all();
    	return view('posts.list_post', compact('posts'));
    }

    public function single_post($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.single_post',compact('post'));
    }

    public function add_post_page()
    {
    	return view('admin.products.create');
    }

    public function update_post_page($id)
    {
        $post = Post::findOrFail($id);
//        dd($post);
        return view('admin.products.update',compact('post'));
    }

    public function posted_products()
    {
        $posts = Post::where('created_by', Auth::User()->id)->get();
        return view('admin.products.index', compact('posts'));
    }


    public function submit_post(Request $request)
    {
        // dd($request);
        $post = new Post();

        $post->name               =   $request->carname;
        $post->model_year         =   $request->modelyear;
        $post->km_used            =   $request->kmusedsofar;
        $post->description        =   $request->description;
        $post->price              =   $request->price;
        $post->contact_no         =   $request->contact;
        $post->color              =   $request->color;
        $post->mileage            =   $request->mileage;
        $post->created_by         =   Auth::User()->id;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = 'image'.str_random(40).'.'.$file->getClientOriginalExtension();
            $file->move('images/', $filename);

            $post->image        =   $filename;
        }

        $post->save();

        return redirect('dashboard')->with('message','Post Added Successfully');
    }


    public function update_post(Request $request)
    {
//    	 dd($request);
        $post = Post::findOrFail($request->post_id);
//        dd($post);
        $post->name               =   $request->carname;
        $post->model_year         =   $request->modelyear;
        $post->km_used            =   $request->kmusedsofar;
        $post->description        =   $request->description;
        $post->price              =   $request->price;
        $post->contact_no         =   $request->contact;
        $post->color              =   $request->color;
        $post->mileage            =   $request->mileage;
        $post->created_by         =   Auth::User()->id;
//        dd($post);
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = 'image'.str_random(40).'.'.$file->getClientOriginalExtension();
            $file->move('images/', $filename);

            $post->image        =   $filename;
        }

        $post->save();
//        dd($post);

        return redirect('dashboard')->with('message','Post Updated Successfully');
    }
}
