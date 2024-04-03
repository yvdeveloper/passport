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
         \App\Models\Contact::factory(10)->create();

         /*\App\Models\Contact::factory()->create([
             'name' => 'Test User',
             'phone' => '031312'
             'email' => 'test@example.com',
         ]);*/
    }
}
