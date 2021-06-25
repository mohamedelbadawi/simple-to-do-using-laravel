<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {

        $todos = Todo::all();
        return view('index')->with('todos', $todos);
    }
    public function show(Todo $todo)
    {
        return view('show')->with('todo', $todo);
    }

    public function create()
    {

        return view('create');
    }

    public function store()
    {

        $this->validate(request(), ['name' => 'required|min:6|max:12',
            'description' => 'required',
        ]);
        $data = Request()->all();
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();
        session()->flash('success','Todo created sucessfully');
        return redirect('/todos');

    }

    public function edit(Todo $todo)
    {

        return view('edit')->with('todo',$todo );
    }

    public function update(Todo $todo)
    {
        $this->validate(request(), ['name' => 'required|min:6|max:12',
            'description' => 'required',
        ]);
        $data = request()->all();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();
        session()->flash('success_edit','Todo edited sucessfully');
        return redirect('/todos');
    }

    public function delete(Todo $todo)
    {
        
        $todo->delete();
session()->flash('danger','Todo deleted successfully');
        return redirect('/todos');
    }

    public function complete(Todo $todo)
    {
       $todo->completed=true;
       $todo->save();
     return redirect('/todos');
    }

}
