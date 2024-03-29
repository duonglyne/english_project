<?php

namespace App\Http\Controllers\Course;

use App\ChuDe;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index($id){
        $chudes = ChuDe::where('course_id', $id)->paginate(9);
        return view('frontend.page.course', compact('chudes'));
    }
}
