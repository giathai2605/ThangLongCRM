<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('service_category')->insert([
            [
                'name'=>'Dịch kế toán',
            ],
            [
                'name'=>'Hóa đơn điện tử'
            ],
            [
                'name'=>'Chữ kí số'
            ]
        ]);
    }
}
