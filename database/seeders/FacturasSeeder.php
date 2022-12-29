<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FacturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facturas')->insert(array(
            'id'          => 1,
            'user_id'     => 1,
            'compra_id'   => 1,
            'factura'     => '1151-1',
            'status'      => 1,  
            'created_at'  => '2022-12-28 01:27:20'
            //'update_at'   => '2022-12-28 01:27:20'
        ));

        DB::table('facturas')->insert(array(
            'id'          => 2,
            'user_id'     => 1,
            'compra_id'   => 2,
            'factura'     => '2141-2',
            'status'      => 1,  
            'created_at'  => '2022-12-28 01:28:24'
            //'update_at'   => '2022-12-28 01:28:24'
        ));

        DB::table('facturas')->insert(array(
            'id'          => 3,
            'user_id'     => 1,
            'compra_id'   => 3,
            'factura'     => '3131-2',
            'status'      => 1,  
            'created_at'  => '2022-12-28 02:45:04'
            //'update_at'   => '2022-12-28 02:45:04'
        ));

        DB::table('facturas')->insert(array(
            'id'          => 4,
            'user_id'     => 1,
            'compra_id'   => 4,
            'factura'     => '4121-4',
            'status'      => 1,  
            'created_at'  => '2022-12-28 02:50:31'
            //'update_at'   => '2022-12-28 02:50:31'
        ));

        DB::table('facturas')->insert(array(
            'id'          => 5,
            'user_id'     => 2,
            'compra_id'   => 8,
            'factura'     => '852-5',
            'status'      => 1,  
            'created_at'  => '2022-12-28 04:10:23'
            //'update_at'   => '2022-12-28 04:10:23'
        ));

        DB::table('facturas')->insert(array(
            'id'          => 6,
            'user_id'     => 2,
            'compra_id'   => 9,
            'factura'     => '932-6',
            'status'      => 1,  
            'created_at'  => '2022-12-28 05:57:09'
            //'update_at'   => '2022-12-28 05:57:09'
        ));

        DB::table('facturas')->insert(array(
            'id'          => 7,
            'user_id'     => 1,
            'compra_id'   => 10,
            'factura'     => '10161-7',
            'status'      => 1,  
            'created_at'  => '2022-12-28 06:17:03'
            //'update_at'   => '2022-12-28 06:17:03'
        ));

        DB::table('facturas')->insert(array(
            'id'          => 8,
            'user_id'     => 3,
            'compra_id'   => 14,
            'factura'     => '1483-8',
            'status'      => 1,  
            'created_at'  => '2022-12-28 21:40:09'
            //'update_at'   => '2022-12-28 21:40:09'
        ));

        DB::table('facturas')->insert(array(
            'id'          => 9,
            'user_id'     => 4,
            'compra_id'   => 19,
            'factura'     => '1934-9',
            'status'      => 1,  
            'created_at'  => '2022-12-28 21:41:35'
            //'update_at'   => '2022-12-28 21:41:35'
        ));

        DB::table('facturas')->insert(array(
            'id'          => 10,
            'user_id'     => 4,
            'compra_id'   => 18,
            'factura'     => '1854-10',
            'status'      => 1,  
            'created_at'  => '2022-12-28 21:41:49'
            //'update_at'   => '2022-12-28 21:41:49'
        ));

        DB::table('facturas')->insert(array(
            'id'          => 11,
            'user_id'     => 5,
            'compra_id'   => 25,
            'factura'     => '25155-11',
            'status'      => 1,  
            'created_at'  => '2022-12-28 21:42:51'
            //'update_at'   => '2022-12-28 21:42:51'
        ));

        DB::table('facturas')->insert(array(
            'id'          => 12,
            'user_id'     => 5,
            'compra_id'   => 22,
            'factura'     => '22145-12',
            'status'      => 1,  
            'created_at'  => '2022-12-28 21:42:58'
            //'update_at'   => '2022-12-28 21:42:58'
        ));
    }
}


