<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

// class Book extends Seeder
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::factory()->count(34)->create();
    }
}
