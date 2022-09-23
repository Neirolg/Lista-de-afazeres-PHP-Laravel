<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    //

    public function index()
    {
        $todos = Todo::all();
        return view('tarefas.index', [
            'todos' => $todos
        ]);
    }

    public function addTodo()
    {
        $body = request()->validate([
            'title' => 'required',
            'description' => 'nullable'
        ]);

        Todo::create($body);

        return redirect('/todos');
    }

    public function update(Todo $todo)
    {
        $todo->update(['isComplete' => true]);
        return redirect('/todos');
    }
    
    public function delete(Todo $todo)
    {
        $todo->delete();
        return redirect('/todos');
    }
}
