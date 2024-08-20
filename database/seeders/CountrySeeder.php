<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            [
                'name' => "ไทย",
                'created_at' => now(),
            ],
            [
                'name' => "พม่า",
                'created_at' => now(),
            ],
            [
                'name' => "เวียดนาม",
                'created_at' => now(),
            ],
            [
                'name' => "ญี่ปุ่น",
                'created_at' => now(),
            ],
            [
                'name' => "เกาหลีใต้",
                'created_at' => now(),
            ], 
        ]);
    }
}
