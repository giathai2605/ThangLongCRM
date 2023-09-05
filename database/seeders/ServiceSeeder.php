<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('service')->insert([
            [
                'name'=>'Lập BCTC năm',
                'service_code'=>'BCTC-001',
                'price'=>999000,
                'category_id'=>1,
                'status'=>1,
            ],
            [
                'name'=>'Lập BCTC năm',
                'service_code'=>'BCTC-001',
                'price'=>999000,
                'category_id'=>2,
                'status'=>1,
            ],
            [
                'name'=>'Lập BCTC năm',
                'service_code'=>'BCTC-001',
                'price'=>999000,
                'category_id'=>2,
                'status'=>1,
            ],
            [
                'name'=>'Lập BCTC năm',
                'service_code'=>'BCTC-001',
                'price'=>999000,
                'category_id'=>1,
                'status'=>1,
            ],
        ]);
    }
}
