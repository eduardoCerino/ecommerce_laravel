<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login.index');
    }
    
    public function login(Request $request)
    {


        $email = $request->input('email');
        $password = $request->input('password');

        
        $user = Cliente::where('Correo', $email)
        ->where('Contraseña', $password)
        ->first();


        if ($user) {
            Session::put('user_id', $user->Id_usuario);
            Session::put('user_name', $user->Nombre);
            return redirect('/shop');
        } else {
            Session::flash('error', 'Verifica tus datos 🚫');
            return view('login.index', ['password_error' => 'Verifica tus datos🚫']);
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }

}

    