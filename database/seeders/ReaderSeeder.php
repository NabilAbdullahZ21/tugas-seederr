<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reader;
use App\Models\Profile;

class ReaderSeeder extends Seeder
{
    public function run(): void
    {
        Reader::factory()
                ->count(10)
                ->has(Profile::factory())
                ->create();

    }
}
