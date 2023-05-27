<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('course.explore', ['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = new Course();

        $course->name = $request->name;
        $course->description = $request->description;
        $course->user_id = 1;
        $course->start_date = Carbon::now();
        $course->end_date = Carbon::now();

        $course->save();

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }

    public function enroll(Request $request) {
        $course_id = $request->course_id;
        $user_id = $request->user_id;

        DB::table('courses_users')->insert([
            'course_id' => $course_id,
            'user_id' => $user_id
        ]);

        return redirect()->back();
        
    }
}
