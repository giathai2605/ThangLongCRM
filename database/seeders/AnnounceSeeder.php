<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnounceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Tạo dữ liệu mẫu
        DB::table('announce')->insert([
            [
                'title'=>'Thông báo 1',
                'content'=>'Nội dung thông báo 1',
                'author_id'=>1,
            ],
            [
                'title'=>'Thông báo 2',
                'content'=>'Nội dung thông báo 2',
                'author_id'=>2,
            ]
        ]);
    }
}
