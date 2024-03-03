<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Worker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(HerbalSeeder::class);
        $this->call(DiseaseSeeder::class);

         \App\Models\User::insert([
             'first_name' => 'Admin',
             'last_name' => 'Admin',
             'email' => 'admin@example.com',
             'password' => bcrypt('admin'),
             'is_admin' => true,
         ]);

        $users = Worker::factory()->count(20)->create();

    }
}
