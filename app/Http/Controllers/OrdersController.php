<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrdersController extends Controller
{
    public function showOrders()
    {
        $user_name = Session::get('user_name');
        $user_id = Session::get('user_id');

        //if there is not user name send to login
        if(!$user_name){
            return redirect()->route('login');
        }

        return view('orders.index', ['user_name' => $user_name, 'user_id' => $user_id]);
    }
}
