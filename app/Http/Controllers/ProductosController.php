<?php

namespace App\Http\Controllers;

use Auth;
use Redirect;
use App\Models\Compras;
use App\Models\productos;
use App\Models\Factura;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoCreateRequest;
use App\Http\Requests\ProductoEditarRequest;


class ProductosController extends Controller
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
            ->get();

        $facturas = Factura::where("status","=",1)
            ->where("user_id","=",$user_id)
            ->get(); 

        $productos = productos::all()->sortByDesc('id');

        return view('productos.index', compact('productos','compras','facturas'));
    }

    
    public function create()
    {
        $user_id = Auth::user()->id;
        $compras = Compras::where("status","=",2)
            ->where("user_id","=",$user_id)
            ->get();

        $facturas = Factura::where("status","=",1)
            ->where("user_id","=",$user_id)
            ->get();

        return view('productos.create', compact('compras','facturas'));
    }

    
    public function store(ProductoCreateRequest $request)
    {
        $producto = productos::create([
            'nombre'   => $request['producto'],
            'precio'   => $request['precio'],
            'impuesto' => $request['impuesto'],
            'cantidad' => $request['cantidad'],
        ]);

        if ($request->file('imagen') == null) {
            $producto->imagen = 'public/images/producto/producto.png';
            $producto->save();
        }else{
            $producto->imagen = $request->file('imagen')->store('image/productos'); 
            $producto->save();
        }

        return Redirect::to('/productos')->with('success','Se agrego el prodcuto correctamente!');
    }

    
    public function show(productos $productos)
    {
        //
    } 

    
    public function edit($id)
    {
        $user_id = Auth::user()->id;
        $compras = Compras::where("status","=",2)
            ->where("user_id","=",$user_id)
            ->get();

        $facturas = Factura::where("status","=",1)
            ->where("user_id","=",$user_id)
            ->get();
            
        $producto = productos::find($id);

        return view('productos.edit', ['producto' => $producto], compact('producto','compras','facturas'));
    }

   
    public function update(ProductoEditarRequest $request, $id)
    {
        $producto = productos::find($id);
        $producto->fill([
            'nombre'   => $request['producto'],
            'precio'   => $request['precio'],
            'impuesto' => $request['impuesto'],
            'cantidad' => $request['cantidad'],
        ]);

        if ($request->file('imagen') == null) {
            $file = "";
        }else{
            $producto->imagen = $request->file('imagen')->store('image/productos'); 
        }

        $producto->save();

        return Redirect::to('/productos')->with('success','Se Actualizo el prodcuto correctamente!');
    }

   
    public function destroy($id)
    {
        $producto = productos::find($id);
        $producto->delete();
 
        return Redirect::to('/productos')->with('success','Se elimino el prodcuto correctamente!');
    }

    
    public function agregarProdcuto($id)
    {
        $user_id  = Auth::user()->id;
        $producto = productos::find($id);

        $producto = compras::create([
            'user_id'     => $user_id,
            'producto_id' => $producto->id,
            'precio'      => $producto->precio,
            'impuesto'    => $producto->impuesto,
            'status'      => 2,
        ]);

        return Redirect::to('/productos')->with('success','Se añadio correctamente el prodcuto a la lista de compras!');
    }
}
