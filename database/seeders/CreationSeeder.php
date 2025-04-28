<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Creation;
use App\Models\Reader;

class CreationSeeder extends Seeder
{
    public function run(): void
    {
        $readers = Reader::all();

        Creation::factory(10)->make()->each(function ($creation) use ($readers) {
            $creation->reader_id = $readers->random()->id;
            $creation->save();
        });
    }
}
