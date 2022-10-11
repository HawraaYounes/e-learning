<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;

Route::post("/student", [UserController::class, "addStudent"])->name("add-student"); 
Route::post("/instructor", [UserController::class, "addInstructor"])->name("add-instructor"); 
Route::post("/course", [CourseController::class, "addCourse"])->name("add-course");