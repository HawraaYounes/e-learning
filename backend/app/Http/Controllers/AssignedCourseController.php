<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssignedCourse;

class AssignedCourseController extends Controller
{
    function assignCourseToInstructor($course,$instructor){
        $assignedCourse = AssignedCourse::create([
            'course_id'=>$course,
            'instructor_id'=>$instructor,
        ]);
        $assignedCourse->save();
        return response()->json([
            "status" => "Success",
            "data" => $assignedCourse
        ]);
    }
}
