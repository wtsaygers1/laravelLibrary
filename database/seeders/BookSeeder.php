<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

// class Book extends Seeder
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Book::factory()->count(10)->create();
    }
}
