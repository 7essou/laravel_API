<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logoutController extends Controller
{
    function logout(){
        Auth::logout();
        return response()->json(['res'=>false]);
    }
}
