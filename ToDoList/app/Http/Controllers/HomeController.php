<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Entra 21";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Entra 21";
        $viewData["subtitle"] =  "Sobre nós";
        $viewData["description"] =  '';
        $viewData["author"] = 'Desenvolvido por: Kelvin Kamchen';                                
        return view('home.about')->with("viewData", $viewData);
    }
}
