<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('work')->insert([
            [
                'title'=>'Công việc 1',
                'content'=>'Nội dung công việc 1',
                'start_date'=>'2021-09-01',
                'end_date'=>'2021-09-30',
                'status'=>1,   
                'user_id'=>1,
                'project_id'=>1,
            ],
            [
                'title'=>'Công việc 2',
                'content'=>'Nội dung công việc 2',
                'start_date'=>'2021-09-01',
                'end_date'=>'2021-09-30',
                'status'=>1,
                'user_id'=>1,
                'project_id'=>1,
            ]
        ]);
    }
}
