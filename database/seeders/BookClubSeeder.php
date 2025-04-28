<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BookClub;
use App\Models\Reader;

class BookClubSeeder extends Seeder
{
    public function run(): void
    {
        $readers = Reader::all();

        BookClub::factory(5)->create()->each(function ($club) use ($readers) {
            $members = $readers->random(rand(2, 5));
            foreach ($members as $reader) {
                $club->readers()->attach($reader->id);
            }
        });
    }
}
