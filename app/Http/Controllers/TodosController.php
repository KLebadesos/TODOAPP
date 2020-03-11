<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){

        $todos = Todo::all();
        return view('todos.index')->with('todos', $todos);
    }

    public function show($todoid){
        //dd($todoid);
        $todo = Todo::find($todoid);

        return view('todos.show')->with('todo', $todo);
    }

    public function create(){
        return view('todos.create');
    }

    public function store(){

        $this->validate(request(), [

            'name'          => 'required | min:6 | max:12',
            'description'    => 'required'

        ]);
        //dd(request()->all());

        $data = request()->all();

        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();

        session()->flash('success','Todo created successfully.');

        return redirect('todos');

    }

    public function edit($todoid){

        $todo = Todo::find($todoid);

        return view('todos.edit')->with('todo',$todo);

    }

    public function update($todoid){

        $this->validate(request(), [

            'name'          => 'required | min:6 | max:12',
            'description'    => 'required'

        ]);

        $data = request()->all();

        $todo = Todo::find($todoid);

        $todo->name = $data['name'];
        $todo->description = $data['description'];

        $todo->save();
        session()->flash('success','Todo updated successfully.');

        return redirect('todos');
    }

    public function destroy($todoid){
        
        $todo = Todo::find($todoid);

        $todo->delete();
        session()->flash('success','Todo deleted successfully.');

        return redirect('/todos');

    }

    public function complete($todoid){

        $todo = Todo::find($todoid);
        $todo->completed = true;
        $todo->save();

        session()->flash('success','Todo has been completed!');

        return redirect('todos');

    }

}
