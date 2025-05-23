<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ReaderSeeder::class,
            BookSeeder::class,
            ReviewSeeder::class,
            BookClubSeeder::class,
            CreationSeeder::class,
            CommentSeeder::class,
            TagSeeder::class,
        ]);
    }
}
