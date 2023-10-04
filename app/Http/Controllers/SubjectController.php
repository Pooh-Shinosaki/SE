<?php

namespace App\Http\Controllers;
use App\Models\course;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    //
    public function create(request $request){
        $course = new course;
        $course->course_code = $request->sub_id;
        $course->course_name = $request->sub_name;
        $course->course_desc = $request->sub_des;
        $course->course_term = $request->sub_t;
        $course->course_year = $request->sub_y;
        $course->user_id = $request->user_id;
        $course->save();

        return redirect()->route('dashboard');
    }
}
