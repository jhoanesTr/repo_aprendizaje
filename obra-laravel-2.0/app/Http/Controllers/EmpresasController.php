<?php

namespace App\Http\Controllers;

use App\Models\Empresas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
         * Elegimos la tabla a la que hacemos la consulta
         * Elegimos la cantidad de datos que queremos mostrar
         * Devuelve una vista
         */

        $datos['empresas']=Empresas::all();
        return view('Empresas.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Empresas.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosEmpresa= request()->except('_token');
        Empresas::insert($datosEmpresa);
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function show(Empresas $empresas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function edit($ID)
    {
        $empresa=Empresas::findOrFail($ID);
        return view('Empresas.editar', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ID)
    {
        $datosEmpresa= request()->except(['_token', '_method']);
        Empresas::where('ID','=',$ID)->update($datosEmpresa);

        $empresa=Empresas::findOrFail($ID);
        return view('Empresas.editar', compact('empresa'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function destroy($ID)
    {
        Empresas::destroy($ID);
        return $this->index();
    }
}
