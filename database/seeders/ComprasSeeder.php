<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ComprasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compras')->insert(array(
            'id'          => 1,
            'user_id'     => 1,
            'producto_id' => 15,
            'precio'      => 175,
            'impuesto'    => 28,
            'status'      => 1,  
            'created_at'  => date('Y-m-d H:m:s')
            //'update_at'   => date('Y-m-d H:m:s')
        ));

        DB::table('compras')->insert(array(
            'id'          => 2,
            'user_id'     => 1,
            'producto_id' => 14,
            'precio'      => 689,
            'impuesto'    => 35,
            'status'      => 1,  
            'created_at'  => '2022-12-28 01:23:49'
            //'update_at'   => '2022-12-28 01:28:24'
        ));

        DB::table('compras')->insert(array(
            'id'          => 3,
            'user_id'     => 1,
            'producto_id' => 13,
            'precio'      => 189,
            'impuesto'    => 26,
            'status'      => 1,  
            'created_at'  => '2022-12-28 01:23:53'
            //'update_at'   => '2022-12-28 02:45:04'
        ));

        DB::table('compras')->insert(array(
            'id'          => 4,
            'user_id'     => 1,
            'producto_id' => 12,
            'precio'      => 78,
            'impuesto'    => 16,
            'status'      => 1,  
            'created_at'  => '2022-12-28 01:23:57'
            //'update_at'   => '2022-12-28 02:50:31'
        ));

        DB::table('compras')->insert(array(
            'id'          => 5,
            'user_id'     => 1,
            'producto_id' => 11,
            'precio'      => 889,
            'impuesto'    => 51,
            'status'      => 2,  
            'created_at'  => '2022-12-28 01:24:00'
            //'update_at'   => '2022-12-28 01:24:00'
        ));

        DB::table('compras')->insert(array(
            'id'          => 6,
            'user_id'     => 1,
            'producto_id' => 10,
            'precio'      => 55,
            'impuesto'    => 12,
            'status'      => 2,  
            'created_at'  => '2022-12-28 01:24:04'
            //'update_at'   => '2022-12-28 01:24:04'
        ));

        DB::table('compras')->insert(array(
            'id'          => 7,
            'user_id'     => 1,
            'producto_id' => 6,
            'precio'      => 25,
            'impuesto'    => 7,
            'status'      => 2,  
            'created_at'  => '2022-12-28 03:53:08'
            //'update_at'   => '2022-12-28 03:53:08'
        ));

        DB::table('compras')->insert(array(
            'id'          => 8,
            'user_id'     => 2,
            'producto_id' => 5,
            'precio'      => 59.35,
            'impuesto'    => 10,
            'status'      => 1,  
            'created_at'  => '2022-12-28 04:09:40'
            //'update_at'   => '2022-12-28 04:10:23'
        )); 

        DB::table('compras')->insert(array(
            'id'          => 9,
            'user_id'     => 2,
            'producto_id' => 3,
            'precio'      => 39.73,
            'impuesto'    => 12,
            'status'      => 1,  
            'created_at'  => '2022-12-28 04:09:50'
            //'update_at'   => '2022-12-28 05:57:10'
        ));

        DB::table('compras')->insert(array(
            'id'          => 10,
            'user_id'     => 1,
            'producto_id' => 16,
            'precio'      => 25,
            'impuesto'    => 18,
            'status'      => 1,  
            'created_at'  => '2022-12-28 06:15:40'
            //'update_at'   => '2022-12-28 06:17:03'
        ));
        
        DB::table('compras')->insert(array(
            'id'          => 11,
            'user_id'     => 2,
            'producto_id' => 6,
            'precio'      => 25.12,
            'impuesto'    => 7,
            'status'      => 2,  
            'created_at'  => '2022-12-28 21:38:02'
            //'update_at'   => '2022-12-28 21:38:02'
        ));

        DB::table('compras')->insert(array(
            'id'          => 12,
            'user_id'     => 2,
            'producto_id' => 12,
            'precio'      => 78,
            'impuesto'    => 16,
            'status'      => 2,  
            'created_at'  => '2022-12-28 21:38:08'
            //'update_at'   => '2022-12-28 21:38:08'
        ));

        DB::table('compras')->insert(array(
            'id'          => 13,
            'user_id'     => 3,
            'producto_id' => 16,
            'precio'      => 25,
            'impuesto'    => 18,
            'status'      => 2,  
            'created_at'  => '2022-12-28 21:39:33'
            //'update_at'   => '2022-12-28 21:39:33'
        ));

        DB::table('compras')->insert(array(
            'id'          => 14,
            'user_id'     => 3,
            'producto_id' => 8,
            'precio'      => 13,
            'impuesto'    => 4,
            'status'      => 1,  
            'created_at'  => '2022-12-28 21:39:42'
            //update_at'   => '2022-12-28 21:40:09'
        ));

        DB::table('compras')->insert(array(
            'id'          => 15,
            'user_id'     => 3,
            'producto_id' => 2,
            'precio'      => 45.65,
            'impuesto'    => 15,
            'status'      => 2,  
            'created_at'  => '2022-12-28 21:39:49'
            //'update_at'   => '2022-12-28 21:39:49'
        ));

        DB::table('compras')->insert(array(
            'id'          => 16,
            'user_id'     => 3,
            'producto_id' => 11,
            'precio'      => 889,
            'impuesto'    => 51,
            'status'      => 2,  
            'created_at'  => '2022-12-28 21:39:56'
            //update_at'   => '2022-12-28 21:39:56'
        ));

        DB::table('compras')->insert(array(
            'id'          => 17,
            'user_id'     => 4,
            'producto_id' => 7,
            'precio'      => 320,
            'impuesto'    => 45,
            'status'      => 2,  
            'created_at'  => '2022-12-28 21:41:05'
            //'update_at'   => '2022-12-28 21:41:05'
        ));

        DB::table('compras')->insert(array(
            'id'          => 18,
            'user_id'     => 4,
            'producto_id' => 5,
            'precio'      => 59.35,
            'impuesto'    => 10,
            'status'      => 1,  
            'created_at'  => '2022-12-28 21:41:09'
            //'update_at'   => '2022-12-28 21:41:09'
        ));

        DB::table('compras')->insert(array(
            'id'          => 19,
            'user_id'     => 4,
            'producto_id' => 3,
            'precio'      => 39.73,
            'impuesto'    => 12,
            'status'      => 1,  
            'created_at'  => '2022-12-28 21:41:13'
            ////''update_at'   => '2022-12-28 21:41:35'
        ));

        DB::table('compras')->insert(array(
            'id'          => 20,
            'user_id'     => 4,
            'producto_id' => 9,
            'precio'      => 6,
            'impuesto'    => 4,
            'status'      => 2,  
            'created_at'  => '2022-12-28 21:41:20'
            //update_at'   => '2022-12-28 21:41:20'
        ));

        DB::table('compras')->insert(array(
            'id'          => 21,
            'user_id'     => 4,
            'producto_id' => 12,
            'precio'      => 78,
            'impuesto'    => 16,
            'status'      => 2,  
            'created_at'  => '2022-12-28 21:41:27'
            //'update_at'   => '2022-12-28 21:41:27'
        ));

        DB::table('compras')->insert(array(
            'id'          => 22,
            'user_id'     => 5,
            'producto_id' => 14,
            'precio'      => 689,
            'impuesto'    => 35,
            'status'      => 1,  
            'created_at'  => '2022-12-28 21:42:22'
            //'update_at'   => '2022-12-28 21:42:58'
        ));

        DB::table('compras')->insert(array(
            'id'          => 23,
            'user_id'     => 5,
            'producto_id' => 4,
            'precio'      => 13,
            'impuesto'    => 8,
            'status'      => 0,  
            'created_at'  => '2022-12-28 21:42:27'
            //'update_at'   => '2022-12-28 21:43:09'
        ));

        DB::table('compras')->insert(array(
            'id'          => 24,
            'user_id'     => 5,
            'producto_id' => 10,
            'precio'      => 55,
            'impuesto'    => 12,
            'status'      => 2,  
            'created_at'  => '2022-12-28 21:42:31'
            //'update_at'   => '2022-12-28 21:42:31'
        ));

        DB::table('compras')->insert(array(
            'id'          => 25,
            'user_id'     => 5,
            'producto_id' => 15,
            'precio'      => 175,
            'impuesto'    => 28,
            'status'      => 1,  
            'created_at'  => '2022-12-28 21:42:36'
            //'update_at'   => '2022-12-28 21:42:51'
        ));

        DB::table('compras')->insert(array(
            'id'          => 26,
            'user_id'     => 5,
            'producto_id' => 7,
            'precio'      => 320,
            'impuesto'    => 45,
            'status'      => 2,  
            'created_at'  => '2022-12-28 21:42:40'
            //'update_at'   => '2022-12-28 21:42:40'
        ));
    }
}


