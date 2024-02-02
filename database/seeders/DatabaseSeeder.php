<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Adventure;
use App\Models\Destination;
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

Destination::factory(2)->create();

Adventure::create([
    'title' => 'good',
    'description' => 'hello there io hope you doing good so please come back and enjoy',
    'advice' => 'good advice for you son is do not make any one move you are the centre of the galaxy',
    'destination_id' => 1, 
]);
Adventure::create([
    'title' => ' advice',
    'description' => ' advice for you son is do not make any one move you',
    'advice' => ' advice for you son is do not make any one move you are the centre of',
    'destination_id' => 2, 
]);
   

    }


}
