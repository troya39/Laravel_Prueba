<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class Compras2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compras')->insert(array(
            'id'          => 14,
            'user_id'     => 3,
            'producto_id' => 8,
            'precio'      => 13,
            'impuesto'    => 4,
            'status'      => 1,  
            'created_at'  => '2022-12-28 21:39:42',
            'update_at'   => '2022-12-28 21:40:09'
        ));

        DB::table('compras')->insert(array(
            'id'          => 15,
            'user_id'     => 3,
            'producto_id' => 2,
            'precio'      => 45.65,
            'impuesto'    => 15,
            'status'      => 2,  
            'created_at'  => '2022-12-28 21:39:49',
            'update_at'   => '2022-12-28 21:39:49'
        ));

        DB::table('compras')->insert(array(
            'id'          => 16,
            'user_id'     => 3,
            'producto_id' => 11,
            'precio'      => 889,
            'impuesto'    => 51,
            'status'      => 2,  
            'created_at'  => '2022-12-28 21:39:56',
            'update_at'   => '2022-12-28 21:39:56'
        ));

        DB::table('compras')->insert(array(
            'id'          => 17,
            'user_id'     => 4,
            'producto_id' => 7,
            'precio'      => 320,
            'impuesto'    => 45,
            'status'      => 2,  
            'created_at'  => '2022-12-28 21:41:05',
            'update_at'   => '2022-12-28 21:41:05'
        ));

        DB::table('compras')->insert(array(
            'id'          => 18,
            'user_id'     => 4,
            'producto_id' => 5,
            'precio'      => 59.35,
            'impuesto'    => 10,
            'status'      => 1,  
            'created_at'  => '2022-12-28 21:41:09',
            'update_at'   => '2022-12-28 21:41:09'
        ));

        DB::table('compras')->insert(array(
            'id'          => 19,
            'user_id'     => 4,
            'producto_id' => 3,
            'precio'      => 39.73,
            'impuesto'    => 12,
            'status'      => 1,  
            'created_at'  => '2022-12-28 21:41:13',
            'update_at'   => '2022-12-28 21:41:35'
        ));

        DB::table('compras')->insert(array(
            'id'          => 20,
            'user_id'     => 4,
            'producto_id' => 9,
            'precio'      => 6,
            'impuesto'    => 4,
            'status'      => 2,  
            'created_at'  => '2022-12-28 21:41:20',
            'update_at'   => '2022-12-28 21:41:20'
        ));

        DB::table('compras')->insert(array(
            'id'          => 21,
            'user_id'     => 4,
            'producto_id' => 12,
            'precio'      => 78,
            'impuesto'    => 16,
            'status'      => 2,  
            'created_at'  => '2022-12-28 21:41:27',
            'update_at'   => '2022-12-28 21:41:27'
        ));

        DB::table('compras')->insert(array(
            'id'          => 22,
            'user_id'     => 5,
            'producto_id' => 14,
            'precio'      => 689,
            'impuesto'    => 35,
            'status'      => 1,  
            'created_at'  => '2022-12-28 21:42:22',
            'update_at'   => '2022-12-28 21:42:58'
        ));

        DB::table('compras')->insert(array(
            'id'          => 23,
            'user_id'     => 5,
            'producto_id' => 4,
            'precio'      => 13,
            'impuesto'    => 8,
            'status'      => 0,  
            'created_at'  => '2022-12-28 21:42:27',
            'update_at'   => '2022-12-28 21:43:09'
        ));

        DB::table('compras')->insert(array(
            'id'          => 24,
            'user_id'     => 5,
            'producto_id' => 10,
            'precio'      => 55,
            'impuesto'    => 12,
            'status'      => 2,  
            'created_at'  => '2022-12-28 21:42:31',
            'update_at'   => '2022-12-28 21:42:31'
        ));

        DB::table('compras')->insert(array(
            'id'          => 25,
            'user_id'     => 5,
            'producto_id' => 15,
            'precio'      => 175,
            'impuesto'    => 28,
            'status'      => 1,  
            'created_at'  => '2022-12-28 21:42:36',
            'update_at'   => '2022-12-28 21:42:51'
        ));

        DB::table('compras')->insert(array(
            'id'          => 26,
            'user_id'     => 5,
            'producto_id' => 7,
            'precio'      => 320,
            'impuesto'    => 45,
            'status'      => 2,  
            'created_at'  => '2022-12-28 21:42:40',
            'update_at'   => '2022-12-28 21:42:40'
        ));
    }
}
