<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
//use validator

class AuthController extends Controller
{
    public function loginForm(){
        return view('auth.login');
    }
    public function loginPost(Request $request){
        $validator= Validator::make($request->all(),
        [
            'nome'=> 'required|min:3',
            'clave' => 'required|min:3',
        ]);

        if ($validator->fails()){
            return response()->json(['success'=>false, 'errors'=>$validator->errors()]);
        }
        if (Auth::attempt(['nome'=>$request->nome, 'clave'=>$request->contraseña])){
            return response()->json(['success'=>true, 'message'=> 'Acceso correcto']);
        }else{
            return response()->json(['succes'=>false, 'message'=> 'Usuario o contraseña incorrecta']);
        }
    }
}
