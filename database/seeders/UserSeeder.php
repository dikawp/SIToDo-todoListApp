<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Otosaka Yuu',
                'email' => 'otosaka@gmail.com',
                'password' => bcrypt('oto12345')
            ],
            [
                'name' => 'Ramadika Wijaya',
                'email' => 'dika@gmail.com',
                'password' => bcrypt('dika12345')
            ],
        ]);
    }
}
