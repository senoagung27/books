<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'name' => 'Sample Book',
            'years' => 2021,
            'slugs' => 'sample-book',
            'author' => 'John Doe',
        ]);
    }
}
