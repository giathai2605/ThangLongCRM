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
        //Tạo dữ liệu mẫu
        DB::table('users')->insert([
            [
                'name' => 'ADMIN',
                'email' => 'admin',
                'phone' => '0123456789',
                'password' => bcrypt('123456'),
                'gender'=>1,
                'role_id' => 1,
                'department_id' => 1,
            ],
            [
                "name"=>'Nguyễn Văn A',
                "email"=>'thai@gmail.com',
                "phone"=>'0123555654',
                "password"=>bcrypt('123456'),
                "gender"=>1,
                "role_id"=>2,
                "department_id"=>1,
               
            ]
            
            ]);   

               

    }
}
