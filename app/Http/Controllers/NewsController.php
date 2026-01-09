<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = news::all();
        return view("news.index",compact("news"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("news.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $news = new news;
        $news->name= $request->name;
        $news->title= $request->title;
        $news->save();
        return redirect()->route('news.index')->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $news= news::find($id);
        return view('news.show',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $news=news::find($id);
        return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $news = news::findOrFail($id);
        $news->update([
            'name'=>$request->input('name'),
            'title'=>$request->input('title')
        ]);
 
        return redirect()->route('news.index')->with('succes');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $news =news::find($id);
        $news->delete();
        return redirect()->route('news.index')->with('success');
    }
}
