<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    function mostrar(){
        return "Pruebacontroller";
    }
    
    function parametros($variable){
        return "var de parametros: ". $variable;
    }

    function blog($slug, $id = null){
        return "El nombre de post es: ${slug} y su ID: ${id}";
    }
}
