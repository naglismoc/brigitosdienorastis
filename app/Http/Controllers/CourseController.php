<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Course;
use App\Models\Coursemodule;
use App\Models\Skill;
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
        $courses = Course::all();
        return view('courses.index',['courses'=>$courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    public static function array_cartesian() {
        $_ = func_get_args();
        if(count($_) == 0)
            return array(array());
        $a = array_shift($_);
        $c = call_user_func_array(__FUNCTION__, $_);
        $r = array();
        foreach($a as $v)
            foreach($c as $p)
                $r[] = array_merge(array($v), $p);

        print_r($r);
        return $r;
    }


    public function generate()
    {
        CourseController::generate2();die;
        // $courses = Course::all();
        // $teachers = Teacher::all();

        // $arr = [[]];
        // foreach ($courses as $course) {
        //     $arrCourse = [];
        //    echo $course->name."<br>";
    
        // //    dd($course->modulesList());
        // foreach ($course->modules as  $module) {
        //     //    echo "<br>--". $module->name."<br>";
        //     $availableTeachers = [];
        //         foreach ($teachers as $key => $teacher) {
              
        //             if(in_array($module->name, $teacher->skillsList())){
        //     $availableTeachers[] = $teacher;
        //         //    echo "\"".substr($teacher->name,0,4)." ".substr($teacher->surname,0,4)."\"".", " ;
        //             }
        //         }
        //         $arrCourse[$module->name ] = $availableTeachers;
        //     }  
        //     $arr[] = $arrCourse;
        //     echo "<br><hr><br>";
        // }

        
      
        // // dd($arr);
        // CourseController::combine($arr);
        
    }
    public static function generate2(){
        $teachers = Teacher::all();
        $courses = Course::all();
        $teachers = Teacher::all();
            // foreach ($teachers as  $teacher) {
                $possibleTeachersForCourseForBIT = [];
                foreach ($courses as $key => $course) {
                    echo $course->name;
                    $possibleTeachersForCourse = [];
                   foreach ($course->modules as $key => $module) {
                    echo $module->name. "<br>";
                        $possibleTeachersForModule = [];
                       foreach ($teachers as  $teacher2) {
                            if(in_array($module->name,$teacher2->skillsList())){
                                // $possibleTeachersForModule[] = "\"".$module->name." ".substr($teacher2->name,0,4)." ".substr($teacher2->surname,0,4)."\"".",";    
                                $possibleTeachersForModule[] = $course->id." ".$module->id." ".$teacher2->id;    
                                echo  $course->id." ".$module->id." ".$teacher2->id.", ";
                                // echo  "\"".$module->name." ".substr($teacher2->name,0,4)." ".substr($teacher2->surname,0,4)."\"".",";
                            }
                        }
                        $possibleTeachersForCourse[] = $possibleTeachersForModule;
                       echo "<br>";
                    }
                    $possibleTeachersForCourseForBIT[] = $possibleTeachersForCourse;
                    echo "<hr>";
                }
                $ptfcb = $possibleTeachersForCourseForBIT;
                // $cross = CourseController::array_cartesian($ptfcb[0][0],$ptfcb[0][1],$ptfcb[0][2]);
                dd($ptfcb);
            // }
    }
    
    public static function combine($courses){// courses - visi kursai
        for ($i=0; $i <count($courses) ; $i++) { //cia einu per visus kursus
            echo "tuscias<hr>";
            if(count($courses[$i]) > 0){ //jei kurse yra kokio nors info einu jo vieno tyrineti
              echo "yra<br>";
                CourseController::recursion(count($courses[$i])-1,$courses[$i]);
            }     
        }

    }


    public static function recursion($count, $course){//count - kiek kurse moduliu
        // dd(courseay_keys($course)[$count]);
        // $keys = courseay_keys($course);
   
        
        echo"<br>modulis -". array_keys($course)[$count]."<br><br><br>";
        if($count>0){
            foreach ($course[array_keys($course)[$count]] /*cia $module[key]*/ as $key => $teacher) {
               echo $teacher->name." ";
               CourseController::recursion($count-1,$course);
            }
        }
        echo "<br>";
    }


   public static function arrUnset(Teacher $t,&$arr){
    foreach ($arr as $key => $module) {
        foreach ($module as $key2 => $t2) {
           if($t->id == $t2->id)
           unset($arr[$key][$key2]);
        }
    }

   }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $st = new Course();
        $st->start_from = $request['start_from'];
        $st->name = $request['name'];
        $st->start_to = $request['start_to'];
        $st->save();

        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $modules = Skill::all();
        $courseModules = Coursemodule::where("course_id","=",$course->id)->get();
        return view('courses.show',['course' => $course, 'modules' => $modules,'courseModules' => $courseModules]);
  
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
    public function update(Request $request, Course $course)
    {
        //
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
}
