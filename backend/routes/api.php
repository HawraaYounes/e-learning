<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post("/student", [UserController::class, "addStudent"])->name("add-student"); 
Route::post("/instructor", [UserController::class, "addInstructor"])->name("add-instructor"); 