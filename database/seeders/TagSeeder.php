<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Book;
use App\Models\Review;
use App\Models\Creation;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        $tags = Tag::factory(10)->create();
        $taggables = collect()
            ->merge(Book::all())
            ->merge(Review::all())
            ->merge(Creation::all());

        foreach ($tags as $tag) {
            $randomTaggedItems = $taggables->random(rand(1, 3));
            foreach ($randomTaggedItems as $taggable) {
                $taggable->tags()->attach($tag->id);
            }
        }
    }
}
