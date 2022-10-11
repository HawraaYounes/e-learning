<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AssignedCourseController;
use App\Http\Controllers\AnnouncementController;;

Route::post("/student", [UserController::class, "addStudent"])->name("add-student"); 
Route::post("/instructor", [UserController::class, "addInstructor"])->name("add-instructor"); 
Route::get("/instructors", [UserController::class, "getAllInstructors"])->name("instructors"); 
Route::post("/course", [CourseController::class, "addCourse"])->name("add-course");
Route::get("/courses", [CourseController::class, "getAllCourses"])->name("courses"); 
Route::get("/assignedcourse/{course}/{instructor}", [AssignedCourseController::class, "assignCourseToInstructor"])->name("assign-course"); 
Route::post("/announcement", [AnnouncementController::class, "addAnnouncement"])->name("add-announecemnt");