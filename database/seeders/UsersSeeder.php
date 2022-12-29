<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('users')->insert(array(
            'id'                => 1,
            'name'              => 'Oswaldo Jiménez',
            'email'             => 'oswaldojimenez293@gmail.com',
            'email_verified_at' => date('Y-m-d H:m:s'),
            'password'          => Hash::make('12345678'),
            'tipo_usuario'      => 1,  
            'status'            => 1,  
            'created_at'        => date('Y-m-d H:m:s')
        ));

        DB::table('users')->insert(array(
            'id'                => 2,
            'name'              => 'Dayana Amaya',
            'email'             => 'dayanaamaya2517@gmail.com',
            'email_verified_at' => date('Y-m-d H:m:s'),
            'password'          => Hash::make('12345678'),
            'tipo_usuario'      => 0,  
            'status'            => 1,  
            'created_at'        => date('Y-m-d H:m:s')
        ));

        DB::table('users')->insert(array(
            'id'                => 3,
            'name'              => 'Antonio Agapito',
            'email'             => 'antonioagapito@gmail.com',
            'email_verified_at' => date('Y-m-d H:m:s'),
            'password'          => Hash::make('12345678'),
            'tipo_usuario'      => 0,  
            'status'            => 1,  
            'created_at'        => date('Y-m-d H:m:s')
        ));

        DB::table('users')->insert(array(
            'id'                => 4,
            'name'              => 'Solanye del Carmen',
            'email'             => 'solanyedelcarmen3@gmail.com',
            'email_verified_at' => date('Y-m-d H:m:s'),
            'password'          => Hash::make('12345678'),
            'tipo_usuario'      => 0,  
            'status'            => 1,  
            'created_at'        => date('Y-m-d H:m:s')
        ));

        DB::table('users')->insert(array(
            'id'                => 5,
            'name'              => 'Darwin Perez',
            'email'             => 'darwinperez@gmail.com',
            'email_verified_at' => date('Y-m-d H:m:s'),
            'password'          => Hash::make('12345678'),
            'tipo_usuario'      => 0,  
            'status'            => 1,  
            'created_at'        => date('Y-m-d H:m:s')
        ));
    }
}
