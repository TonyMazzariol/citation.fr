<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Authors;
use App\Models\Quotes;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        Authors::factory(15)->create()->each(function ($user) {
            Quotes::factory(rand(1, 6))->create([
                'authors_id' => $user->id
            ]); 
        });
        
    }
}
