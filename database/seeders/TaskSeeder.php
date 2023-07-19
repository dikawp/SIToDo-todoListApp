<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('tasks')->insert([
        //     [
        //         'workspace_id' => 1,
        //         'namaTask' => 'Wibu',
        //         'deskTask' => 'blablabla',
        //         'startDate' => Carbon::create('2000', '01', '01'),
        //         'dueDate' => Carbon::create('2003', '01', '01'),
        //     ],
        // ]);
    }
}
