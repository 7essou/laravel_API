<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function Auth(Request $request){
      
        if($token=Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return response()->json(['res'=>true,'token'=>$token,'user'=>Auth::user()],200);
        }
        else{
            return response()->json(['res'=>false],401);
        }
    
    
    }
}
