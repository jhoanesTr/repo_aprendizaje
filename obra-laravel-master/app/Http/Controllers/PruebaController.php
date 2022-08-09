<?php

namespace App\Http\Controllers;

use App\Models\Empresas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Empresa_Seguimiento;

class PruebaController extends Controller
{
    public function index(Request $request)
    {
        # Buscador
        $buscar_por = $request->get('buscar_por');
        $buscar = $request->get('buscar');

        $empresas = Empresa_Seguimiento::Buscador($buscar_por, $buscar)->paginate(10);



        $data = [
            'empresas' => $empresas,
        ];

        return view('x', $data);
    }
}
