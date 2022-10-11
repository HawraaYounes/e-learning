<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    function addCourse(Request $request){
        $course = Course::create([
            'code'=>$request->code,
            'name'=>$request->name,
           
        ]);
        $course->save();
        return response()->json([
            "status" => "Success",
            "data" => $course
        ]);
    }
}
