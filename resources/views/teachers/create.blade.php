
 @extends('layouts.app')

 @section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Book</div>
 
                <div class="card-body">
                     <form method="POST" action="{{route('teacher.store')}}">
                             vardas: <input type="text" name="name">
                             pavardė: <input type="text" name="surname"><br>
                             {{-- užimtas nuo: <input type="date" name="from"><br>
                             užimtas iki: <input type="date" name="to"> --}}
                             @csrf
                             <button type="submit">ADD</button>
                          </form>
                </div>
            </div>
        </div>
    </div>
 </div>

 @endsection