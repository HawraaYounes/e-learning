<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    function addAnnouncement(Request $request){
        $announcement= Announcement::create([
            'instructor_id'=>$request->instructor_id,
            'description'=>$request->description,
           
        ]);
        $announcement->save();
        return response()->json([
            "status" => "Success",
            "data" => $announcement
        ]);
    }

}
