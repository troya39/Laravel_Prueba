<?php

namespace App\Http\Controllers;

use Auth;
use Redirect;
use App\Models\Compras;
use App\Models\Factura;
use App\Models\productos;
use Illuminate\Http\Request;


class ComprasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $user_id = Auth::user()->id;
        $compras = Compras::where("status","=",2)
            ->where("user_id","=",$user_id)
            ->orderByDesc('created_at')
            ->get();

        $facturas = Factura::where("status","=",1)
            ->where("user_id","=",$user_id)
            ->orderByDesc('created_at')
            ->get();
   
        return view('compras.index', compact('compras','facturas'));
    }

    public function allCompras()
    {
        $user_id = Auth::user()->id;
        $compras = Compras::where("status","=",2)
            ->where("user_id","=",$user_id)
            ->orderByDesc('created_at')
            ->get(); 

        $facturas = Factura::where("status","=",1)
            ->where("user_id","=",$user_id)
            ->orderByDesc('created_at')
            ->get();

        $compra = Compras::orderBy('created_at', 'DESC')->get();

        return view('compras.allCompras', compact('facturas','compras','compra'));
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        $factura = Factura::create([
            'user_id'   => $request['user_id'],
            'compra_id' => $request['compra_id'],
            'factura'   => $request['factura'],
            'status'    => $request['statusFactura'],
        ]);

        $compra_id = $request['compra_id'];
        $compra = compras::find($compra_id);
        $compra->fill(['status' => $request['statusCompra']]);
        $compra->save();

        return Redirect::to('/compras')->with('success','Finalizo su compra exitosamente...!');
    }

    
    public function show($id)
    {
        $user_id = Auth::user()->id;
        $compras = Compras::where("status","=",2)
            ->where("user_id","=",$user_id)
            ->get();

        $facturas = Factura::where("status","=",1)
            ->where("user_id","=",$user_id)
            ->get();

        $compra  = compras::find($id);
        $factura = factura::latest('id')->first();
        
        if ($factura == null) {
            $factura = 1;
        }else{
            $factura =  $factura->id+1;
        }
        
        return view('compras.show', compact('compra','compras','factura','facturas'));
    }


    public function mostrarFactura($compra_id)
    {
        $user_id = Auth::user()->id;
        $compras = Compras::where("status","=",2)
            ->where("user_id","=",$user_id)
            ->get();

        $facturas = Factura::where("status","=",1)
            ->where("user_id","=",$user_id)
            ->get();

        $compra  = compras::find($compra_id);
        $factura = Factura::where('compra_id','=',$compra->id)->first();
        
        return view('facturas.show', compact('compra','compras','factura', 'facturas'));
    }

    
    public function edit(Compras $compras)
    {
        //
    }

    
    public function update(Request $request, Compras $compras)
    {
        //
    }

    
    public function destroy($id)
    {
        $compra = compras::find($id);
        $compra->fill(['status' => 0]);
        $compra->save();
        $compra->delete();

        return Redirect::to('/compras')->with('success','Se elimino el prodcuto correctamente!');
    }
}
