<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\Reader;
use App\Models\Book;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $readers = Reader::all();
        $books = Book::all();

        Review::factory(20)->make()->each(function ($review) use ($readers, $books) {
            $review->reader_id = $readers->random()->id;
            $review->book_id = $books->random()->id;
            $review->save();
        });
    }
}

