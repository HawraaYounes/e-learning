<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    function getAllCourses(){
        $courses=Course::all();
        return response()->json([
            "status" => "Success",
            "data" => $courses
        ]);
    }
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
