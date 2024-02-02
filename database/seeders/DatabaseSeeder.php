<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Adventure;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(1)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


//         Adventure::create([
// 'title' => 'test test ',
// 'advice'=> 'this is a good advice for you son ',
// 'description' => 'this is a good advice for you son is do not make any one move you you are the centre of the galaxy '

//         ]);



        Adventure::factory(3)->create();
    }


}
