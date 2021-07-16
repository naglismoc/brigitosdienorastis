<?php

namespace App\Http\Controllers;

use App\Models\Teacherskill;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherskillController extends Controller
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
        $st = new TeacherSkill();
        $st->teacher_id = $request['teacher_id'];
        $st->skill_id = $request['skill_id'];
        $st->save();
        return redirect()->route('teacher.show',['teacher' => Teacher::find( $st->teacher_id)]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacherskill  $teacherskill
     * @return \Illuminate\Http\Response
     */
    public function show(Teacherskill $teacherskill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacherskill  $teacherskill
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacherskill $teacherskill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacherskill  $teacherskill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacherskill $teacherskill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacherskill  $teacherskill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacherskill $teacherskill)
    {
        //
    }
}
