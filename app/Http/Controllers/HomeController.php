<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect()->route('todo.index');
    }
    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - To Do List";
        $viewData["subtitle"] =  "Sobre nós";
        $viewData["description"] =  '';
        $viewData["author"] = 'Desenvolvido por: Kelvin Kamchen';                                
        return view('home.about')->with("viewData", $viewData);
    }

}