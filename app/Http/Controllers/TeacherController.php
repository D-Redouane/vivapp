<?php

namespace App\Http\Controllers;

use App\Models\Teacher;

class TeacherController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $teachers=Teacher::all();
        return $teacher;
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
