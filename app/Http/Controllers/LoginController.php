<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "ToDoList";
        return view('auth.login')->with("viewData", $viewData);
    }
}
