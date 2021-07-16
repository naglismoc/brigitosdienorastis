
 @extends('layouts.app')

 @section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Grupės moduliai</div>
 
                <div class="card-body">
                    <p>{{$course->name}}</p>
                    anksciausiai pradeti <p>{{$course->start_from}}</p>
                   veliausiai pradeti <p>{{$course->start_to}}</p>

                    @foreach ($courseModules as $ts)
                             {{-- {{dd($teacherSkills)}}    --}}
                             {{$ts->modules->name}} {{$ts->hours}} <br>
                    @endforeach
                     <form method="POST" action="{{route('coursemodule.store')}}">
                        Kiek valandu turi trukti <input type="text" name="hours" value=""><br>
                       Koks skillas/modulis? <input type="hidden" name="course_id" value="{{$course->id}}">
                        <select name="skill_id" id="cars">
                            @foreach ($modules as $module)
                                
                            <option value="{{$module->id}}">{{$module->name}}</option>
                            @endforeach
                          </select>
                             @csrf
                             <button type="submit">ADD</button>
                          </form>
                </div>
            </div>
        </div>
    </div>
 </div>

 @endsection