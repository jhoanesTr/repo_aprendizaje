<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        return view('admin.index');
    }

    public function show(Request $request)
    {
        $users = User::orderBy('id')->paginate(5);
        return view('admin.show', ['users' => $users]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        // NO HACE FALTA ESTE OTRO METODO PARA HACER EL HASH DE LAS CONTRASEÑAS, SÓLO LA FUNCIÓN AL
        // FINAL DEL MODELO, PERO LO DEJO AQUI COMENTADO QUE NO MOLESTA
        // $this->validate(request(), [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);
        // $user = User::create(request(['name', 'email', 'password']));

        $user = new User($request->all());
        $user->save();
        return redirect()->action([UserController::class, 'index']);
    }
}
