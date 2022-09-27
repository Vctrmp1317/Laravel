<?php

namespace App\Http\Controllers;

class PruebaController extends Controller
{
    public function name($name)
    {
        return "Hola ".$name;
    }
}