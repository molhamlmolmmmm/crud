<?php

namespace App\Http\Controllers;

use App\Models\u;
use Illuminate\Http\Request;

class UController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $u=u::create([
            'name'=>'$request->name',
            'email'=>'$request->email',
        ]); 
       
        $u->pro()->create([
            'name'=>$request->profilename,
            'title'=>$request->profiletitle,

        ]);
        return response()->json(['status=>ok'],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(u $u)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(u $u)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, u $u)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(u $u)
    {
        //
    }
}
