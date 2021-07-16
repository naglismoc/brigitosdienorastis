
 @extends('layouts.app')

 @section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Book</div>
 
                <div class="card-body">
                     <form method="POST" action="{{route('course.store')}}">
                             kurso pavadinimas pilnas (php 13gr or something..): <input type="text" name="name"><br>
                             anksciausia pradzia: <input type="date" name="start_from"><br>
                             veliausia pradzia: <input type="date" name="start_to"><br>
                             @csrf
                             <button type="submit">ADD</button>
                          </form>
                </div>
            </div>
        </div>
    </div>
 </div>

 @endsection