<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoria_id = DB::table('categorias')->insertGetid([
            'nome' => 'Popular'
        ]);


        $driver_id = DB::table('users')->insertGetid([
            'name' => 'Julio Cesar',
            'email' => 'jccintr@gmail.com',
            'password' => Hash::make('123'),
            'role' => '2', //driver
            'email_verified_at' =>  date("Y-m-d H:i:s") 
        ]);
        $veiculo_id = DB::table('veiculos')->insertGetid([
            'categoria_id' => $categoria_id,
            'user_id' => $driver_id,
            'modelo' => 'Gol',
            'cor' => 'Branco',
            'placa' => 'PVH-9529'
        ]);

        //========================================
        $driver_id = DB::table('users')->insertGetid([
            'name' => 'Antonio Alves',
            'email' => 'alves@gmail.com',
            'password' => Hash::make('123'),
            'role' => '2', //driver
            'email_verified_at' =>  date("Y-m-d H:i:s") 
        ]);
        $veiculo_id = DB::table('veiculos')->insertGetid([
            'categoria_id' => $categoria_id,
            'user_id' => $driver_id,
            'modelo' => 'Palio',
            'cor' => 'Preto',
            'placa' => 'ABC-9999'
        ]);
        //===========================================
        $driver_id = DB::table('users')->insertGetid([
            'name' => 'João Carlos Dias',
            'email' => 'jcarlos@gmail.com',
            'password' => Hash::make('123'),
            'role' => '2', //driver
            'email_verified_at' =>  date("Y-m-d H:i:s") 
        ]);
        $veiculo_id = DB::table('veiculos')->insertGetid([
            'categoria_id' => $categoria_id,
            'user_id' => $driver_id,
            'modelo' => 'Onix',
            'cor' => 'Vermelho',
            'placa' => 'JJC-1234'
        ]);
        //===========================================
        $driver_id = DB::table('users')->insertGetid([
            'name' => 'Letícia Bepler',
            'email' => 'lele@gmail.com',
            'password' => Hash::make('123'),
            'role' => '2', //driver
            'email_verified_at' =>  date("Y-m-d H:i:s") 
        ]);
        $veiculo_id = DB::table('veiculos')->insertGetid([
            'categoria_id' => $categoria_id,
            'user_id' => $driver_id,
            'modelo' => 'Corsa',
            'cor' => 'Branco',
            'placa' => 'COP-6532'
        ]);
        //===========================================
        $categoria_id = DB::table('categorias')->insertGetid([
            'nome' => 'Luxo'
        ]);
        $driver_id = DB::table('users')->insertGetid([
            'name' => 'Maria Clara Silva',
            'email' => 'mclara@gmail.com',
            'password' => Hash::make('123'),
            'role' => '2', //driver
            'email_verified_at' =>  date("Y-m-d H:i:s") 
        ]);
        $veiculo_id = DB::table('veiculos')->insertGetid([
            'categoria_id' => $categoria_id,
            'user_id' => $driver_id,
            'modelo' => 'Vectra',
            'cor' => 'Prata',
            'placa' => 'ACC-6666'
        ]);

    }
}


