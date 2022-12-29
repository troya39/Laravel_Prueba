<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//---------------------- Inicio Rutas Módulo Bienvenida Laravel -------------------------------------//

Route::get('/', function () {
    return view('welcome');
});

//---------------------- Inicio Rutas Módulo Bienvenida Laravel -------------------------------------//



//---------------------- Fin Rutas Módulo Autenticaciòn --------------------------------------------//

Auth::routes();

//---------------------- Fin Rutas Módulo Autenticaciòn --------------------------------------------//



//---------------------- Inicio Rutas Módulo Bienvenida Penel -------------------------------------//

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//---------------------- Fin Rutas Módulo Bienvenida Panel - Home ----------------------------------//



//---------------------- Inicio Rutas Módulo Productos ---------------------------------------------//

Route::get('/productos',[App\Http\Controllers\ProductosController::class, 'index'])
	->name('productos');
Route::get('/productos/create',[App\Http\Controllers\ProductosController::class, 'create'])
	->name('producto.create');
Route::post('/productos/store',[App\Http\Controllers\ProductosController::class, 'store'])
	->name('producto.store');
Route::get('/productos/{producto}/edit',[App\Http\Controllers\ProductosController::class, 'edit'])
	->name('producto.edit');
Route::put('/productos/{producto}',[App\Http\Controllers\ProductosController::class, 'update'])
	->name('producto.update');
Route::delete('/productosDelete/{producto}',[App\Http\Controllers\ProductosController::class, 'destroy'])
	->name('productoDelete.destroy');
Route::get('/agregarProdcutos/{producto}',[App\Http\Controllers\ProductosController::class, 'agregarProdcuto'])
	->name('agregarProdcuto');

//----------------------- Fin Rutas Módulo Productos ------------------------------------------------//



//----------------------- Inicio Rutas Módulo Compras -----------------------------------------------//

Route::get('/compras',[App\Http\Controllers\ComprasController::class, 'index'])
	->name('compra');
Route::get('/compras/create',[App\Http\Controllers\ComprasController::class, 'create'])
	->name('compra.create');
Route::post('/compras/store',[App\Http\Controllers\ComprasController::class, 'store'])
	->name('compra.store');
Route::get('/compras/{producto}',[App\Http\Controllers\ComprasController::class, 'show'])
	->name('compra.show');
Route::get('/compras/{producto}/edit',[App\Http\Controllers\ComprasController::class, 'edit'])
	->name('compra.edit');
Route::put('/compras/{producto}',[App\Http\Controllers\ComprasController::class, 'update'])
	->name('compra.update');
Route::delete('/comprasDelete/{producto}',[App\Http\Controllers\ComprasController::class, 'destroy'])
	->name('compraDelete.destroy');
Route::get('/comprasAll',[App\Http\Controllers\ComprasController::class, 'allCompras'])
	->name('compra.allCompras');
Route::get('/comprasMostrarFactura/{producto}',[App\Http\Controllers\ComprasController::class, 'mostrarFactura'])
	->name('compra.mostrarFactura');	


//----------------------- Fin Rutas Módulo Productos ------------------------------------------------//



//----------------------- Inicio Rutas Módulo Factura -----------------------------------------------//

Route::get('/facturas',[App\Http\Controllers\FacturaController::class, 'index'])
	->name('factura');
Route::get('/facturas/create',[App\Http\Controllers\FacturaController::class, 'create'])
	->name('factura.create');
Route::post('/facturas/store',[App\Http\Controllers\FacturaController::class, 'store'])
	->name('factura.store');
Route::get('/facturas/{producto}',[App\Http\Controllers\FacturaController::class, 'show'])
	->name('factura.show');
Route::get('/facturas/{producto}/edit',[App\Http\Controllers\FacturaController::class, 'edit'])
	->name('factura.edit');
Route::put('/facturas/{producto}',[App\Http\Controllers\FacturaController::class, 'update'])
	->name('factura.update');
Route::delete('/facturasDelete/{producto}',[App\Http\Controllers\FacturaController::class, 'destroy'])
	->name('facturaDelete.destroy');
Route::get('/facturasPdf/{producto}',[App\Http\Controllers\FacturaController::class, 'pdfFactura'])
	->name('factura.pdfFactura');
Route::get('/facturasAll',[App\Http\Controllers\FacturaController::class, 'allFacturas'])
	->name('factura.allFacturas');


//----------------------- Fin Rutas Módulo Productos ------------------------------------------------//