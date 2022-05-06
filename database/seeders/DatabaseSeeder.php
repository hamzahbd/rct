<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\User;

use App\Models\Project;
use App\Models\Category;
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



        User::create([
            'email' => 'fahri279@gmail.com',
            'name' => 'Fachri Ramadhan',
            'password' => bcrypt('password'),
            'is_admin' => 1
        ]);

        $this->call([
            ProjectSeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            ProductSeeder::class,
            CartSeeder::class,
            CartDetailSeeder::class,
        ]);
    }
}
