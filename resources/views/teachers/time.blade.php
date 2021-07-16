
 @extends('layouts.app')

 @section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Book</div>
 
                <div class="card-body">
                    <p>{{$teacher->name}} {{$teacher->surname}}</p>
                   
                    @foreach ($teacherTimes as $ts)
                             {{-- {{dd($teacherSkills)}}    --}}
                from {{$ts->from}} to
                  {{$ts->to}}<br>
                    @endforeach
                     <form method="POST" action="{{route('teacher.timeStore',$teacher)}}">
                          užimtas nuo: <input type="date" name="from"><br>
                             užimtas iki: <input type="date" name="to">
                             @csrf
                             <button type="submit">ADD</button>
                          </form>
                </div>
            </div>
        </div>
    </div>
 </div>

 @endsection