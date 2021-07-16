

{{-- // 3000mg 200lasu 10ml // 3-4men max dozem 1,5men 120.  --}}


@extends('layouts.app')

{{-- @section('title') Der AuthorS !!! @endsection --}}
<style>
  tr, th, td{
      border:  solid rgb(194, 184, 184) 1px;
  }
</style>
@section('content')

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">
                Grupės
           
            
              <br>
              </div>
               <div class="card-body">
                  <ul class="list-teacher">
                    <table>
                      <tr style="border-bottom: solid rgb(122, 122, 122) 2px;">
                        <th>Pavadinimas</th>
                        <th>anksciausia pradzia</th>
                        <th>veliausia pradzia</th>
                       
                        
                        <th >prideti modulius</th>
                        <th >trinti</th>
                       
                    
                      </tr>
                   
                      @foreach ($courses as $course)
                      <tr>
                        <td>  <b>{{$course->name}}</b> 
                        </td>
                        <td><b>{{$course->start_from}}</b>  
                        </td>
                        <td><b>{{$course->start_to}}</b>  
                        </td>
                       <td>
                          <a class="btn btn-primary btn-sm" role="button" href="{{route('course.show',[$course])}}">užeiti</a>
                        </td> 
                       {{--  @if(Auth::user()->isAdministrator())
                        <td>    
                          <a class="btn btn-success btn-sm disabled"  role="button" href="{{route('course.show',[$course])}}">redaguoti</a>
                        </td>
                        <td>    
                          <a class="btn btn-danger btn-sm disabled"  role="button" href="{{route('course.show',[$course])}}">trinti</a>
                        </td>
                        @endif --}}
                      </tr>
             
                {{-- <li class="list-course-item"> --}}
                {{-- <a href="{{route('course.edit',[$course])}}">{{$course->name}} edit</a> --}}
                {{-- <a href="{{route('course.show',[$course])}}">{{$course->name}}  </a> --}}
                {{-- <a href="{{route('course.pdf',[$teacher])}}"> PDF </a> --}}
                {{-- <form method="POST" action="{{route('teacher.destroy', [$teacher])}}">
                 @csrf
                 <button type="submit"  class="btn btn-danger">DELETE</button> --}}
                </form>
                {{-- @if($teacher->portret)
                <img src="{{asset('img/'.$teacher->portret)}}">
                @endif --}}
              {{-- </li> --}}
              @endforeach
                </table>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>




@endsection