<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class, 
            AnnounceSeeder::class,
            AnnounceForDepartmentSeeder::class,
            AppointmentSeeder::class,
            ContractSeeder::class,
            ContractTypeSeeder::class,
            DepartmentSeeder::class,
            DocumentSeeder::class,
            FeedbackSeeder::class,
            MethodSeeder::class,
            NotificationSeeder::class,
            PaymentSeeder::class,
            ProjectSeeder::class,
            ReceiptSeeder::class,
            ReportSeeder::class,
            ReportDetailSeeder::class,
            ReportOverviewSeeder::class,
            RoleSeeder::class,
            ServiceSeeder::class,
            ServiceCategorySeeder::class,
            WorkSeeder::class,
            DocumentTypeSeeder::class,
        ]);
    }
}
