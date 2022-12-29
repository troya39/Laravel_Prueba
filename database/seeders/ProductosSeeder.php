<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(array(
            'id'         => 1,
            'nombre'     => 'Camara',
            'precio'     => '123.45',
            'impuesto'   => '5',
            'imagen'     => 'image/productos/camara.png',
            'cantidad'   => '5',  
            'created_at' => date('Y-m-d H:m:s')
        ));

        DB::table('productos')->insert(array(
            'id'         => 2,
            'nombre'     => 'Camisa Wrangler',
            'precio'     => '45.65',
            'impuesto'   => '15',
            'imagen'     => 'image/productos/camisaWrangler.png',
            'cantidad'   => '15',  
            'created_at' => date('Y-m-d H:m:s')
        ));

        DB::table('productos')->insert(array(
            'id'         => 3,
            'nombre'     => 'Cartera Mujer',
            'precio'     => '39.73',
            'impuesto'   => '12',
            'imagen'     => 'image/productos/carteraMujer.png',
            'cantidad'   => '12',  
            'created_at' => date('Y-m-d H:m:s')
        ));

        DB::table('productos')->insert(array(
            'id'         => 4,
            'nombre'     => 'Correa Militar',
            'precio'     => '13.00',
            'impuesto'   => '8',
            'imagen'     => 'image/productos/correaMilitar.png',
            'cantidad'   => '8',  
            'created_at' => date('Y-m-d H:m:s')
        ));

        DB::table('productos')->insert(array(
            'id'         => 5,
            'nombre'     => 'Falda',
            'precio'     => '59.35',
            'impuesto'   => '10',
            'imagen'     => 'image/productos/falda.png',
            'cantidad'   => '10',  
            'created_at' => date('Y-m-d H:m:s')
        ));

        DB::table('productos')->insert(array(
            'id'         => 6,
            'nombre'     => 'Gorra Leones',
            'precio'     => '25.12',
            'impuesto'   => '7',
            'imagen'     => 'image/productos/gorraLeones.png',
            'cantidad'   => '7',  
            'created_at' => date('Y-m-d H:m:s')
        ));

        DB::table('productos')->insert(array(
            'id'         => 7,
            'nombre'     => 'Laptop',
            'precio'     => '320.00',
            'impuesto'   => '45',
            'imagen'     => 'image/productos/laptop.png',
            'cantidad'   => '9',  
            'created_at' => date('Y-m-d H:m:s')
        ));

        DB::table('productos')->insert(array(
            'id'         => 8,
            'nombre'     => 'Lentes de Sol',
            'precio'     => '13.00',
            'impuesto'   => '4',
            'imagen'     => 'image/productos/lentesSol.png',
            'cantidad'   => '4',  
            'created_at' => date('Y-m-d H:m:s')
        ));

        DB::table('productos')->insert(array(
            'id'         => 9,
            'nombre'     => 'Medias Tobilleras',
            'precio'     => '6.00',
            'impuesto'   => '4',
            'imagen'     => 'image/productos/mediasTobilleras.png',
            'cantidad'   => '4',  
            'created_at' => date('Y-m-d H:m:s')
        ));

        DB::table('productos')->insert(array(
            'id'         => 10,
            'nombre'     => 'Pantalón Levis',
            'precio'     => '55.00',
            'impuesto'   => '12',
            'imagen'     => 'image/productos/pantalonLevis.png',
            'cantidad'   => '12',  
            'created_at' => date('Y-m-d H:m:s')
        ));

        DB::table('productos')->insert(array(
            'id'         => 11,
            'nombre'     => 'PS5',
            'precio'     => '889.00',
            'impuesto'   => '51',
            'imagen'     => 'image/productos/ps5.png',
            'cantidad'   => '15',  
            'created_at' => date('Y-m-d H:m:s')
        ));

        DB::table('productos')->insert(array(
            'id'         => 12,
            'nombre'     => 'Reloj Militar ',
            'precio'     => '78.00',
            'impuesto'   => '16',
            'imagen'     => 'image/productos/relojMilitar.png',
            'cantidad'   => '16',  
            'created_at' => date('Y-m-d H:m:s')
        ));

        DB::table('productos')->insert(array(
            'id'         => 13,
            'nombre'     => 'Teléfono Poco',
            'precio'     => '189.00',
            'impuesto'   => '26',
            'imagen'     => 'image/productos/telefonoPoco.png',
            'cantidad'   => '10',
            'created_at' => date('Y-m-d H:m:s')
        ));

        DB::table('productos')->insert(array(
            'id'         => 14,
            'nombre'     => 'TV',
            'precio'     => '689.00',
            'impuesto'   => '35',
            'imagen'     => 'image/productos/tv.png',
            'cantidad'   => '10',  
            'created_at' => date('Y-m-d H:m:s')
        ));

        DB::table('productos')->insert(array(
            'id'         => 15,
            'nombre'     => 'Zapatos Nike',
            'precio'     => '175.00',
            'impuesto'   => '28',
            'imagen'     => 'image/productos/zapatoNike.png',
            'cantidad'   => '10',  
            'created_at' => date('Y-m-d H:m:s')
        ));

        DB::table('productos')->insert(array(
            'id'         => 16,
            'nombre'     => 'Casco',
            'precio'     => '25',
            'impuesto'   => '18',
            'imagen'     => 'image/productos/Zg141mf7On3GA2BMKDGyOQYSYGGzu9R4cdWD55CZ.png',
            'cantidad'   => '12',  
            'created_at' => '2022-12-28 06:15:25'
        ));
    }
}
 