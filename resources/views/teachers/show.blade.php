
 @extends('layouts.app')

 @section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Book</div>
 
                <div class="card-body">
                    <p>{{$teacher->name}} {{$teacher->surname}}</p>
                   
                    <p>{{$teacher->from}}</p>
                    @foreach ($teacherSkills as $ts)
                             {{-- {{dd($teacherSkills)}}    --}}
                  {{$ts->skills->name}}<br>
                    @endforeach
                     <form method="POST" action="{{route('teacherskill.store')}}">
                        <input type="hidden" name="teacher_id" value="{{$teacher->id}}">
                        <select name="skill_id" id="cars">
                            @foreach ($skills as $skill)
                                
                            <option value="{{$skill->id}}">{{$skill->name}}</option>
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