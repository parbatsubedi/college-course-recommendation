<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'stream' => 'required|string|max:255',
                'subStream' => 'nullable|string|max:255',
                'name' => 'required|string|max:255',
                'shortName' => 'nullable|string|max:255',
                'description' => 'nullable|string',
                'gpa_limit' => 'nullable|numeric',
                'duration' => 'nullable|string',
            ]);

            Course::create($request->all());
            return redirect()->route('course.show')->with('success', 'Course created successfully.');
        }
        return view('admin.createCourse');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $course = Course::all();
        return view('admin.courseshow', ['course' => $course]);
    }

    public function showForStudent(Course $course)
    {
        $course = Course::all();
        // return view('home.courses',['course'=>$course]);
        return view('home.courses', compact('course'));
    }
    public function showForCollege(Course $course)
    {
        $course = Course::all();
        // return view('home.courses',['course'=>$course]);
        return view('college.course-show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request,$id)
    {
        // dd("hello");
        $course = Course::findOrFail($id);
        if ($request->isMethod('post')) {
            $request->validate([
                'stream' => 'required|string|max:255',
                'subStream' => 'nullable|string|max:255',
                'name' => 'required|string|max:255',
                'shortName' => 'nullable|string|max:255',
                'description' => 'nullable|string',
                'gpa_limit' => 'nullable|numeric',
                'duration' => 'nullable|string',
            ]);

            $course->update($request->all());
            return redirect()->route('course.show')->with('success', 'Course Updated successfully.');
        }
        return view('admin.editCourse',compact('course'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
    public function getById($id)
    {
        $course = Course::find($id);
        return view('admin.viewcourse', compact('course'));
    }
    public function getByIdforStudent($id)
    {
        $course = Course::find($id);
        return view('home.viewcoursedes', compact('course'));
    }
    public function getByIdForCollege($id)
    {
        $course = Course::find($id);
        return view('college.view-course', compact('course'));
    }
}
