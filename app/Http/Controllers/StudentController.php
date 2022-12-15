<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $student=Student::all();
        return $student;
    }

    public function show($id)
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function destroy($id)
    {
        
    }
    
}
