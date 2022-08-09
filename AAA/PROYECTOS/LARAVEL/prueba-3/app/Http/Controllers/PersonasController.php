<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;


class PersonasController extends Controller
{
    public function index(){
        return view('Personas.index');
    }


    public function create(){

        return view('Personas.nuevo');
    }
}
