<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Student;
use \App\Teacher;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $students = Student::all();
        $teachers = Teacher::all();
        return view('student.index',compact('students','teachers'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Student::create($request->all());

        return back();  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $student = Student::findOrFail($request->studentId);

        $student->update($request->all());
       
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        
        $category = Student::findOrFail($request->studentId);
        $category->delete();

        return back();

    }
}
