<?php

namespace App\Http\Controllers;

use App\Models\Empresas;
use Illuminate\Http\Request;
use SEO;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        SEO::setTitle('Empresas Index');
        SEO::setDescription('Listado de registradas registradas en el Servicio de Orientacion Laboral');
        SEO::opengraph()->setUrl('http://127.0.0.1:8000/empresas/index');
        #$busqueda = $request->get('busqueda');
#
        #$empresas = Empresas::where('nome', 'like', ''.$busqueda.'%')
        #                    ->orWhere('telefono', 'like', ''.$busqueda.'%')
        #                    ->orderBy('id', 'desc')
        #                    ->paginate(10);

        //
        # Buscador
        $buscar_por = $request->get('buscar_por');
        $buscar     = $request->get('buscar');
        $empresas   = Empresas::Buscador($buscar_por, $buscar)
            #->paginate(10)
        ;

        $data = [
            'empresas' => $empresas
        ];
        return view('empresas.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        SEO::setTitle('Empresas Crear');
        SEO::setDescription('Formulario para registrar una empresa en la base de datos');
        SEO::opengraph()->setUrl('http://127.0.0.1:8000/empresas/create');
        return view('empresas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $empresa = new Empresas($request->all());
        $empresa->save();
        return redirect()->action([EmpresasController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        SEO::setTitle('Empresa Perfil');
        SEO::setDescription('Datos completos de una empresa en especifico');
        SEO::opengraph()->setUrl("http://127.0.0.1:8000/persoas/$id/show");
        $empresa = Empresas::findOrFail($id);
        return view('empresas.show', ['empresas' => $empresa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        $empresa = Empresas::findOrFail($id);
        return view('empresas.edit', ['empresas' => $empresa]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        $empresa = empresas::findOrFail($id);
        $empresa->nome = $request->nome;
        $empresa->localidade = $request->localidade;
        $empresa->poboacion = $request->poboacion;
        $empresa->actividade = $request->actividade;
        $empresa->telefono = $request->telefono;
        $empresa->fax = $request->fax;
        $empresa->data_incorporacion = $request->data_incorporacion;
        $empresa->persoa_contacto = $request->persoa_contacto;
        $empresa->orientador = $request->orientador;
        $empresa->ofertas_contratacion = $request->ofertas_contratacion;
        $empresa->ofertas_formacion = $request->ofertas_formacion;
        $empresa->notas = $request->notas;
        $empresa->save();
        return redirect()->action([EmpresasController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        $empresa = Empresas::findOrFail($id);
        $empresa->delete();
        return redirect()->action([EmpresasController::class, 'index']);
    }
}
