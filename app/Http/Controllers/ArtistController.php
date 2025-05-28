<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

use function Illuminate\Log\log;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists=Artist::all();
        return response()->json($artists,201);
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
        $artist= new Artist($request->all());
        $artist->save();
        return response()->json('ok',200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $artist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    { 
        $artist=Artist::find($id);
        $NamePrImg='';
        $NameDescImg='';
        $artistData = json_decode($request->input('artist'), true);
        if($request->hasFile('profilImg')){
            $NamePrImg=time().'.'.$request->file('profilImg')->extension();
            $request->file('profilImg')->storeAs('images',$NamePrImg);
            $artistData['Profil_img']=asset('images/'.$NamePrImg);
            $artistData['desc_img']=$artist->desc_img;
            $artist->update($artistData);
            return response()->json("updated",200);
        }
        if($request->hasFile('descImg')){
        $NameDescImg=time().'.'.$request->file('descImg')->extension();
        $request->file('descImg')->storeAs('images',$NameDescImg);
        $artistData['desc_img']=asset('images/'.$NameDescImg);
        $artistData['Profil_img']=$artist->Profil_img;
        $artist->update($artistData);
        return response()->json("updated",200);
        }
       
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        //
    }
}
