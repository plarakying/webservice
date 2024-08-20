<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('regions')->insert([
            [
                'name' => "ไทยภาคกลาง",
                'created_at' => now(),
                'county_id' => '1'
            ],
            [
                'name' => "เวียดนามภาคตะวันออกเฉียงเหนือ",
                'created_at' => now(),
                'county_id' => '3'
            ],
            [
                'name' => "ญี่ปุ่นภาคคันโต",
                'created_at' => now(),
                'county_id' => '4'
            ],
            [
                'name' => "พม่าภาคอิรวดี",
                'created_at' => now(),
                'county_id' => '2'
            ],
            [
                'name' => "เกาหลีภาคย็องนัม",
                'created_at' => now(),
                'county_id' => '5'
            ], 
            
        ]);
    }
}
