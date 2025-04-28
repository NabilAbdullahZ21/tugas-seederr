<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Reader;
use App\Models\Book;
use App\Models\Review;
use App\Models\Creation;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        $readers = Reader::all();
        $books = Book::all();
        $reviews = Review::all();
        $creations = Creation::all();

        $commentables = collect()
            ->merge($books)
            ->merge($reviews)
            ->merge($creations);

        Comment::factory(20)->make()->each(function ($comment) use ($readers, $commentables) {
            $target = $commentables->random();

            $comment->reader_id = $readers->random()->id;
            $comment->commentable_id = $target->id;
            $comment->commentable_type = get_class($target);
            $comment->save();
        });
    }
}
