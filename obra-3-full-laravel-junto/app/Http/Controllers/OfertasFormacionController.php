<?php

namespace App\Http\Controllers;

use App\Models\OfertasFormacion;
use Illuminate\Http\Request;

class OfertasFormacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ofertas_formacions = OfertasFormacion::orderBy('id')->paginate(10);
        return view ('ofertas_formacion.index', ['ofertas_formacions' => $ofertas_formacions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OfertasFormacion  $ofertasFormacion
     * @return \Illuminate\Http\Response
     */
    public function show(OfertasFormacion $ofertasFormacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OfertasFormacion  $ofertasFormacion
     * @return \Illuminate\Http\Response
     */
    public function edit(OfertasFormacion $ofertasFormacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OfertasFormacion  $ofertasFormacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OfertasFormacion $ofertasFormacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OfertasFormacion  $ofertasFormacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(OfertasFormacion $ofertasFormacion)
    {
        //
    }
}
