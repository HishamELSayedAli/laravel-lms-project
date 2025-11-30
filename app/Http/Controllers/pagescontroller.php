<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class pagescontroller extends Controller
{


    public function courses(){
        $courses = Course::all();
        return view('index', compact('courses'));
    }


    




    //index
    /*
    public function index() {
        return view('index');
    }
    */


}
