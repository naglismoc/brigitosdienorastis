<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\TeacherTime;
use App\Models\Teacherskill;
use App\Models\Skill;
use Illuminate\Http\Request;
use DateTime;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index',['teachers'=>$teachers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $st = new Teacher;
        $st->name = $request['name'];
        $st->surname = $request['surname'];
        $st->from = $request['from'];
        $st->to = $request['to'];
        $st->save();

        return redirect()->route('teacher.index');

    }
    public function time(Teacher $teacher)
    {
        $teacherTimes = TeacherTime::where("teacher_id","=",$teacher->id)->get();
        return view('teachers.time',['teacherTimes' => $teacherTimes,'teacher' => $teacher]);
    

    }
    public function timeStore(Request $request, Teacher $teacher)
    {
        $date = new DateTime($request->from);

        $week = $date->format("W");
        // dd($week);
        $time = new TeacherTime();
        $time->teacher_id = $teacher->id;
        $time->from = $request->from;
        $time->to = $request->to; 
        $time->save();
         return redirect()->route('teacher.index');
    

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        $skills = Skill::all();
        $teacherSkills = TeacherSkill::where("teacher_id","=",$teacher->id)->get();
        return view('teachers.show',['teacher' => $teacher, 'skills' => $skills,'teacherSkills' => $teacherSkills]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
