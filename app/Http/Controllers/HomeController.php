<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
use App\Models\Compras;
use App\Models\Factura;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $compras = Compras::where("status","=",2)
            ->where("user_id","=",$user_id)
            ->get(); 

        $facturas = Factura::where("status","=",1)
            ->where("user_id","=",$user_id)
            ->get();

        $productos = productos::all();

        return view('home', compact('productos','compras','facturas'));
    }
}
