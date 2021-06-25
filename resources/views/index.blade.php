@extends('layouts.app')

@section('title')
Todos
@endsection

@section('content')

<h1 class="text-center m-5">TODOS PAGE</h1>
<div class="container">
        <div class="card card-default">
            <div class="card-header">
            <h2 class="text-center ">TODOS</h2>
            </div>
            <ol class="list-group">
            @foreach ($todos as $todo )
            <li class="list-group-item">{{$todo->description}}
            <a class="btn btn-primary btn-sm float-right me-0" href="/todos/{{$todo->id}}">view</a>
            @if (!$todo->completed)
               <a class="btn btn-warning btn-sm float-right me-0" href="/todos/{{$todo->id}}/complete">Complete</a> 
            @endif
        
            </li>
            @endforeach
            </ol>
        </div>


</div>   

@endsection