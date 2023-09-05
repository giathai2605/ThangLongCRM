<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Tạo dữ liệu mẫu
        DB::table('department')->insert([
            [
                'name'=>'Phòng kế hoạch',
                'manager_id'=>1,
            ],
            [
                'name'=>'Phòng kinh doanh',
                'manager_id'=>2,
            ]
        ]);
    }
}
