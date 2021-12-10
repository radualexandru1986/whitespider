<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Rent;
use App\Models\User;
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
         Book::factory(70)->create();
         User::factory(30)->create();
         Rent::factory(100)->create();
    }
}
