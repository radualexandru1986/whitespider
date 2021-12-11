<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = ['Fiction', 'Novel', 'Narrative', 'Article', 'Memoir', 'Poetry', 'Fantasy', 'Prose', 'Drama', 'Suspense'];
        foreach ($genres as $genre) {
            Book::factory()
                ->count(10)
                ->for(Genre::factory()->state([
                    'name' => $genre,
                ]))
                ->create();
        }
    }


}
