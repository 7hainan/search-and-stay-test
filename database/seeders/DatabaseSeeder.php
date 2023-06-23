<?php

namespace Database\Seeders;

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
        $user = \App\Models\User::factory(User::class)->create(
            [
                'name'  =>'Search and Stay USER',
                'email' =>'searchandstay@email.com',
                'password'=>bcrypt('password')
            ]);
        
         \App\Models\User::factory(10)->create();
         \App\Models\Book::factory(10)->create();
         
    }
}
