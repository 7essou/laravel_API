<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservation = Reservation::orderBy('id','desc')->get();
        return  response()->json($reservation,200);
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
        $request['dateresrv']=date("Y-m-d H:i:s") ;
        $resev = new Reservation($request->all());
        $resev->save();
        return response()->json('the reservation has been add',200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $reser = Reservation::find($id);
    
        if (!$reser) {
            return response()->json(['error' => 'Reservation not found'], 404);
        }
    
        $reser->etat = $request['etat'];
        $reser->save();
    
        return response()->json('The reservation has been updated', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
