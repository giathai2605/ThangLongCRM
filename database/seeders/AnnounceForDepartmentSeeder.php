<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnounceForDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Tạo dữ liệu mẫu
        DB::table('announce_for_department')->insert([
            [
                'title' => 'Thông báo về việc nghỉ lễ 30/4 và 1/5',
                'content' => 'Nhân dịp kỷ niệm 46 năm ngày giải phóng miền Nam, thống nhất đất nước (30/4/1975 - 30/4/2021) và 135 năm ngày Quốc tế lao động (1/5/1886 - 1/5/2021), Trường Đại học Công nghệ Thông tin thông báo lịch nghỉ lễ như sau:',
                'department_id' => 1,
                'author_id'=>1
            ],
            [
                
                'title' => 'Thông báo về việc nghỉ lễ 2/9',
                'content' => 'Nhân dịp kỷ niệm 46 năm ngày giải phóng miền Nam, thống nhất đất nước (30/4/1975 - 30/4/2021) và 135 năm ngày Quốc tế lao động (1/5/1886 - 1/5/2021), Trường Đại học Công nghệ Thông tin thông báo lịch nghỉ lễ như sau:',
                'department_id' => 1,
                'author_id'=>2
            ]

        ]);
    }
}
