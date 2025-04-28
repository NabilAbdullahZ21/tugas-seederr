<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Product::create([
            'name' => 'Nasi Goreng',
            'price' => 20000,
            'description' => 'Nasi goreng spesial dengan ayam dan telor.',
        ]);

        \App\Models\Product::create([
            'name' => 'Ayam Penyet',
            'price' => 25000,
            'description' => 'Rasakan penyetnya ayam dengan sambal bawang!.',
        ]);

        \App\Models\Product::create([
            'name' => 'Tempe Bacem',
            'price' => 2000,
            'description' => 'Tempe yang dimarinasi dengan bumbu khusus.',
        ]);

        \App\Models\Product::create([
            'name' => 'Gudeg',
            'price' => 15000,
            'description' => 'Makanan khas D.I Yogyakarta.',
        ]);

        \App\Models\Product::create([
            'name' => 'Lontong Sayur',
            'price' => 5000,
            'description' => 'Biasanya hanya tersedia saat lebaran.',
        ]);

        \App\Models\Product::create([
            'name' => 'Kangkung Tumis',
            'price' => 2500,
            'description' => 'Kenikmatan kangkung yang menggugah selera.',
        ]);
    }
}
