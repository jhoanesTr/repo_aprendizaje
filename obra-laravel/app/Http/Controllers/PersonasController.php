<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PersonasController extends Controller
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

        $datos['personas']=Personas::paginate();
        return view('Personas.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Personas.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosPersona= request()->except('_token');
        Personas::insert($datosPersona);
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function show(Personas $personas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function edit($ID)
    {
        $persona=Personas::findOrFail($ID);
        return view('Personas.editar', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ID)
    {
        $datosPersona= request()->except(['_token', '_method']);
        Personas::where('ID','=',$ID)->update($datosPersona);

        $persona=Personas::findOrFail($ID);
        return view('Personas.editar', compact('persona'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy($ID)
    {
        Personas::destroy($ID);
        return $this->index();
    }
}
