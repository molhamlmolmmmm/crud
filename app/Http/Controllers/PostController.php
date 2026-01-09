<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post =post::all();
        if(!empty($post)){
             return response()->json([$post]);
        }
          return response()->json(["status=>no data"],202);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new post;
        $post->name=$request->name;
        $post->title=$request->title;
        $post->save();
        return response()->json(["status=>success"],202);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post=post::findOrFail($id);
        if(!empty($post)){
            return response()->json($post);
        }
        return response()->json(["status=> not found"],404);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post= post::findOrFail($id);
        if(!empty($post))
        {
             $post->update([
            'name'=>$request->input('name'),
            'title'=>$request->input('title')
        ]);
        return response()->json(["status=>updated"],202);

        }
        return response()->json(["status=>not updated"],status: 404);
        return response()->json([$request]);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = post::findOrFail($id);
        if(!empty($post)){
        $post->delete();
        return response()->json(["status=>deleted"],202);
        }
        return response()->json(["status=>notfound"],404);
     
    }
}
