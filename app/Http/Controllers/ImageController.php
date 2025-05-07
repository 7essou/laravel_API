<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images= Image::all();
        return response()->json($images,201);
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
    {   $imgName='';
        $image= new Image();
        $image->idArtist=$request->idArtist;
        if($request->hasFile('image')){
          $imgName=time().'.'.$request->file('image')->extension();
          $request->file('image')->storeAs('images',$imgName);
        $image->img=asset('images/'.$imgName);
        }
        $image->save();
        return response()->json(' Image add',200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        //
    }
}
