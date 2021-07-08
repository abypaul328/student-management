<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mark;
use \App\Student;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $marks = Mark::all();
        $students = Student::all();
        return view('mark.index',compact('marks', 'students'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Mark::create($request->all());

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

        $mark = Mark::findOrFail($request->markId);

        $mark->update($request->all());
       
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
        
        $mark = Mark::findOrFail($request->markId);
        $mark->delete();

        return back();

    }
}
