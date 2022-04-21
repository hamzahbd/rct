<?php

namespace Database\Seeders;

use App\Models\User;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(5)->create([
            'is_admin' => 0
        ]);

        Project::factory(5)->create();

        User::create([
            'email' => 'fahri279@gmail.com',
            'name' => 'Fachri Ramadhan',
            'password' => bcrypt('password'),
            'is_admin' => 1
        ]);
    }
}
