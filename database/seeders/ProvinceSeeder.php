<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provinces')->insert([
            [
                'name' => "กรงเทพ",
                'created_at' => now(),
                'region_id' => '1'
            ],
            [
                'name' => "ห่าซาง",
                'created_at' => now(),
                'region_id' => '3'
            ],
            [
                'name' => "อิบารากิ",
                'created_at' => now(),
                'region_id' => '4'
            ],
            [
                'name' => "พะสิม",
                'created_at' => now(),
                'region_id' => '2'
            ],
            [
                'name' => "ปูซาน",
                'created_at' => now(),
                'region_id' => '5'
            ],
            [
                'name' => "ชัยนาท",
                'created_at' => now(),
                'region_id' => '1'
            ],
            [
                'name' => "กาวบั่ง",
                'created_at' => now(),
                'region_id' => '3'
            ],
            [
                'name' => "ไซตามะ",
                'created_at' => now(),
                'region_id' => '4'
            ],
            [
                'name' => "ฮีนตาดะ",
                'created_at' => now(),
                'region_id' => '2'
            ],
            [
                'name' => "แทกู",
                'created_at' => now(),
                'region_id' => '5'
            ], 
        ]);
    }
}
