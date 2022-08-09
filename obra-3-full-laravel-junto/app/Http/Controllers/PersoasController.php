<?php

namespace App\Http\Controllers;

use App\Models\Persoas;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PersoasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $busqueda = trim($request->get('busqueda'));

        // $persoas = Persoas::paginate(10);
        $persoas = Persoas::sortable()
            ->where('nome', 'like', '' . $busqueda . '%')
            ->orWhere('nif', 'like', '' . $busqueda . '%')
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('persoas.index', ['persoas' => $persoas, 'busqueda' => $busqueda]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('persoas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // VALIDACIÓN DE FORMULARIOS (si hay un error no pasaría a la siguiente línea)
        // $this->validate(request(), [
        //     'nome' => 'required|max:50',
        //     'nif' => 'required',
        //     'data_nacemento' => 'required|date',
        //      OTROS - SACAR REQUIRED DE LOS FORMULARIOS
        // ]);

        $persoa = new Persoas($request->all());
        // $persoa->validate();
        $persoa->save();
        return redirect()->action([PersoasController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $persoa = Persoas::findOrFail($id);
        return view('persoas.show', ['persoas' => $persoa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $persoa = Persoas::findOrFail($id);
        return view('persoas.edit', ['persoas' => $persoa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $persoa = Persoas::findOrFail($id);
        $persoa->nome = $request->nome;
        $persoa->primeiro_apelido = $request->primeiro_apelido;
        $persoa->segundo_apelido = $request->segundo_apelido;
        $persoa->nif = $request->nif;
        $persoa->data_nacemento = $request->data_nacemento;
        $persoa->sexo = $request->sexo;
        $persoa->codigo_postal = $request->codigo_postal;
        $persoa->telefono = $request->telefono;
        $persoa->email = $request->email;
        $persoa->save();
        return redirect()->action([PersoasController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $persoa = Persoas::findOrFail($id);
        $persoa->delete();
        return redirect()->action([PersoasController::class, 'index']);
    }

    public function pdf(){
        $personas = Persoas::paginate();
        $data = [
            'personas' => $personas
        ];
        $pdf = Pdf::loadView('pdf.personas', $data);
        $pdf->setPaper('A4', 'landscape');
        $pdf->setOption('nativeFonts');


        return $pdf->stream('list_Personas.pdf');
        //return view('pdf.personas', compact('personas', 'pdf'));
    }
}
