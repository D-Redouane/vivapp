<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $course=Course::all();
        return $course;
        
    }

    public function show($id)
    {
        
    }

    
}
