<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Tạo dữ liệu mẫu
        DB::table('projects')->insert([
            [
                'name' => 'Dự án 1',
                'description' => 'Mô tả dự án 1',
                'department_id' => 1,
                'start_date' => '2021-01-01',
                'end_date' => '2021-12-31',
                'status' => 1,
                
            ],
            [
                'name' => 'Dự án 2',
                'description' => 'Mô tả dự án 2',
                'department_id' => 2,
                'start_date' => '2021-01-01',
                'end_date' => '2021-12-31',
                'status' => 1,
               
            ],
            [
                'name' => 'Dự án 3',
                'description' => 'Mô tả dự án 3',
                'department_id' => 3,
                'start_date' => '2021-01-01',
                'end_date' => '2021-12-31',
                'status' => 1,
                
            ],
            [
                'name' => 'Dự án 4',
                'description' => 'Mô tả dự án 4',
                'department_id' => 4,
                'start_date' => '2021-01-01',
                'end_date' => '2021-12-31',
                'status' => 1,
                
            ],
            [
                'name' => 'Dự án 5',
                'description' => 'Mô tả dự án 5',
                'department_id' => 5,
                'start_date' => '2021-01-01',
                'end_date' => '2021-12-31',
                'status' => 1,
            ]
        ]);

    }
}
