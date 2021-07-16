

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
                  <ul class="list-skill">
                    <table>
                      <tr style="border-bottom: solid rgb(122, 122, 122) 2px;">
                        <th>pavadinimas</th>
                        <th >trinti</th>
                       
                    
                      </tr>
                   
                      @foreach ($skills as $skill)
                      <tr>
                        <td><b>{{$skill->name}}</b>  
                        </td>
                      
                      </tr>
             
                {{-- <li class="list-skill-item"> --}}
                {{-- <a href="{{route('skill.edit',[$skill])}}">{{$skill->name}} edit</a> --}}
                {{-- <a href="{{route('skill.show',[$skill])}}">{{$skill->name}}  </a> --}}
                {{-- <a href="{{route('skill.pdf',[$skill])}}"> PDF </a> --}}
                {{-- <form method="POST" action="{{route('skill.destroy', [$skill])}}">
                 @csrf
                 <button type="submit"  class="btn btn-danger">DELETE</button> --}}
                </form>
                {{-- @if($skill->portret)
                <img src="{{asset('img/'.$skill->portret)}}">
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