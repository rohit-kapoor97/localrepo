<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\CompanyDetail;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        CompanyDetail::factory(50)->create();

        $this->call([
            companyDetailseeder::class,
            companyAccountseeder::class,
            companyUserseeder::class,
        ]);

       
     

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
