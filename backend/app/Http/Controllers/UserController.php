<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Contracts\Providers\Auth;

class UserController extends Controller
{
    function addStudent(Request $request){
        $student = User::create([
    
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'user_type'=>3,
        ]);
        $student->save();
        return response()->json([
            "status" => "Success",
            "data" => $student
        ]);
    }

    function addInstructor(Request $request){
        $student = User::create([
    
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> bcrypt($request->password),
            'user_type'=>2,
        ]);
        $student->save();
        return response()->json([
            "status" => "Success",
            "data" => $student
        ]);
    }
    
    function getAllInstructors(){
        $instructors=User::where('user_type',2)->get();
        return response()->json([
            "status" => "Success",
            "data" => $instructors
        ]);
    }
}
