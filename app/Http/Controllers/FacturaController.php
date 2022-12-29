<?php

namespace App\Http\Controllers;

use Auth;
use Redirect;
use App\Models\Compras;
use App\Models\productos;
use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
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

        return view('facturas.index', compact('facturas','compras'));
    }

       
    public function show($factura)
    {
        $user_id = Auth::user()->id;
        $compras = Compras::where("status","=",2)
            ->where("user_id","=",$user_id)
            ->get();

        $facturas = Factura::where("status","=",1)
            ->where("user_id","=",$user_id)
            ->get();

        $factura = Factura::where('factura','=',$factura)->first();
        $compra  = compras::find($factura->compra_id);

        return view('facturas.show', compact('compra','compras','factura', 'facturas'));
    }


    public function pdfFactura($factura)
    {
        $user_id = Auth::user()->id;
        $compras = Compras::where("status","=",2)
            ->where("user_id","=",$user_id)
            ->get();
        $factura = Factura::where('factura','=',$factura)->first();
        $compra  = compras::find($factura->compra_id);

        $view = view('facturas.factura', compact('compra','compras','factura'));

        set_time_limit(300);
        
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
       
        //return $pdf->stream('Registro.pdf');
        $pdf->output();
        $dom_pdf = $pdf->getDomPDF();
        $canvas  = $dom_pdf->get_canvas();
        $canvas->page_text(0, 0, "Pág {PAGE_NUM} de {PAGE_COUNT}", null, 10, array(0, 0, 0));
        return $pdf->download('Detalle_Factura.pdf');
    }


    public function allFacturas()
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

        $factura = Factura::orderBy('created_at', 'DESC')->get();

        return view('facturas.allFacturas', compact('facturas','compras','factura'));
    }


    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function edit(Factura $factura)
    {
        //
    }

    
    public function update(Request $request, Factura $factura)
    {
        //
    }

    
    public function destroy(Factura $factura)
    {
        //
    }
}
