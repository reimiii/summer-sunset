<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Profile::factory(1)->create();
        \App\Models\Project::factory(3)->create();

//         \App\Models\User::factory()->create([
//             'name' => 'HILMI AM',
//             'email' => 'miigo@duck.com',
//         ]);
    }
}
