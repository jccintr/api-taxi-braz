<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class PassageiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $pax_id = DB::table('users')->insertGetid([
            'name' => 'Vitor Pereira',
            'email' => 'vitor@gmail.com',
            'password' => Hash::make('123'),
            'role' => '1', //pax
            'email_verified_at' =>  date("Y-m-d H:i:s") 
        ]);

        $pax_id = DB::table('users')->insertGetid([
            'name' => 'Antonio Oliveira',
            'email' => 'tonhao@gmail.com',
            'password' => Hash::make('123'),
            'role' => '1', //pax
            'email_verified_at' =>  date("Y-m-d H:i:s") 
        ]);
    }
}




