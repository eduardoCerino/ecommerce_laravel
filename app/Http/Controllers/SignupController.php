<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Session;



class SignupController extends Controller
{
    //
    public function registrarUsuario(Request $request) {

        $cliente = new Cliente();
        $cliente->Nombre = $request->input('name');
        $cliente->Apellido = $request->input('lastname');
        $cliente->CP = $request->input('cp');
        $cliente->Correo = $request->input('email');
        $cliente->Contraseña = $request->input('password');
        $cliente->save();

        Session::put('user_id', $cliente->Id_usuario);
        Session::put('user_name', $cliente->Nombre);


        return redirect()->route('shop');
    }

    public function showsignupForm() {
        return view('signup.index');
    }
}

