<?php

namespace App\Http\Controllers;

use App\Models\Coursemodule;
use App\Models\Course;
use Illuminate\Http\Request;

class CoursemoduleController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        
        $st = new Coursemodule();
        $st->hours = $request['hours'];
        $st->course_id = $request['course_id'];
        $st->skill_id = $request['skill_id'];
        $st->save();
        return redirect()->route('course.show',['course' => Course::find( $st->course_id)]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coursemodule  $coursemodule
     * @return \Illuminate\Http\Response
     */
    public function show(Coursemodule $coursemodule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coursemodule  $coursemodule
     * @return \Illuminate\Http\Response
     */
    public function edit(Coursemodule $coursemodule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coursemodule  $coursemodule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coursemodule $coursemodule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coursemodule  $coursemodule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coursemodule $coursemodule)
    {
        //
    }
}
