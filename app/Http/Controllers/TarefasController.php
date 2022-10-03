<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarefasController extends Controller
{
    public function tarefas()
    {
        $viewData = [];
        $viewData["title"] = "ToDoList";
        return view('.dashboard')->with("viewData", $viewData);
    }
}
