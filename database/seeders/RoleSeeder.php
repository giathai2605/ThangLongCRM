<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Tạo dữ liệu mẫu
        DB::table('roles')->insert([
            [
                'name' => 'ADMIN',
                'description' => 'Quản trị viên',
            ],
            [
                'name' => 'USER',
                'description' => 'Người dùng',
            ],
        ]);
    }
}
