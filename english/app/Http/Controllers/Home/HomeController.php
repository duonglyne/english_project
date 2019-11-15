<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $data = array();
        $data['courses'] = DB::table('khoahoc')->get();
        return view('frontend.homepage.homepage', $data);
    }
}
