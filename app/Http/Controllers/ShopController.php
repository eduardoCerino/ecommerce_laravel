<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Ventas;

class ShopController extends Controller
{
    public function showProducts()
    {
        $user_name = Session::get('user_name');
        $user_id = Session::get('user_id');

        if(!$user_name){
            return redirect()->route('login');
        }

        return view('shop.index', ['user_name' => $user_name, 'user_id' => $user_id]);
    }

    public function addProduct1 (Request $request)
    {
        $user_id = Session::get('user_id');
        $quantity = $request->input('quantity');

        $venta = Ventas::create([
            'Id_usuario' => $user_id,
            'articulo_1' => $quantity,
            'articulo_2' => 0,
            'articulo3' => 0
        ]);


        return redirect()->route('orders');
    }

    public function addProduct2 (Request $request)
    {
        $user_id = Session::get('user_id');
        $quantity = $request->input('quantity');

        $venta = Ventas::create([
            'Id_usuario' => $user_id,
            'articulo_1' => 0,
            'articulo_2' => $quantity,
            'articulo3' => 0
        ]);


        return redirect()->route('orders');
    }

    public function addProduct3 (Request $request)
    {
        $user_id = Session::get('user_id');
        $quantity = $request->input('quantity');

        $venta = Ventas::create([
            'Id_usuario' => $user_id,
            'articulo_1' => 0,
            'articulo_2' => 0,
            'articulo3' => $quantity
        ]);


        return redirect()->route('orders');
    }
}
