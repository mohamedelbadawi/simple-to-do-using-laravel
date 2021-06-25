@extends('layouts.app')


@section('content')

<h1 class="text-center">Create Todo</h1>

<form method="post" action="/store-todos">
@csrf
    <div class="row justify-content-center">
        <div class="col-md-8">
          @if($errors->any())
              <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <li>
                {{$error}}
                </li>
                    
                @endforeach              
              </div>
          @endif
            <div class="card card-default">

                <div class="card-header">Create a new todo</div>
                <div class="form-group">

                    <input class="form-control" type="text" placeholder="Name" name="name">
                    <div class="form-group">
                        <textarea name="description" id="" placeholder="description" cols="30" rows="10"
                            class="form-control mt-4"></textarea>
                    </div>

                     <div class="form-group text-center">
                        <button class="btn btn-success m-2" type="submit">Create</button>
                    </div>
                </div </div>
            </div>

        </div>

    </div>

</form>

@endsection