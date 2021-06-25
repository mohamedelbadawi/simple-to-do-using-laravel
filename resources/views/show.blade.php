@extends('layouts.app')

@section('title')

Single todo :{{$todo->name}}
@endsection


@section('content')
<h1 class="text-center my-5">{{$todo->name}}</h1>


<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-default">

            <div class="card-header">
                Details
            </div>
            <div class="card-body">
                {{$todo->description}}
            </div>
        
        <div class="flex justify-content-center">
            <a href="/todos/{{$todo->id}}/edit" class="btn btn-primary btn-sm" >Edit</a>
             <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger btn-sm" type="submit">Delete</a>
        </div>
        </div>
    </div>
</div>
@endsection 