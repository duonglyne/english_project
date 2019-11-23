<?php

namespace App\Http\Controllers\Course;

use App\ChuDe;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChudeController extends Controller
{
    public function index($id){
        $chudes = ChuDe::find($id)->paginate(9);
        return view('frontend.page.chude', compact('chudes'));
    }
}
