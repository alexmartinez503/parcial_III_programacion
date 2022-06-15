<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Adidas',
            'slug' => 'adidas',
            'details' => 'Tallas: 8, 9, 10, y 11',
            'price' => 60.00,
            'description' => 'Adidas conchas blancos',
            'image_path' => 'adidasconcha.jpg'
        ]);

        Product::create([
            'name' => 'Fila',
            'slug' => 'fila',
            'details' => 'Tallas: 8, 9, 10, y 11',
            'price' => 49.99,
            'description' => 'fila color blanco',
            'image_path' => 'fila.jpg'
        ]);

        Product::create([
            'name' => 'Gucci',
            'slug' => 'gucci',
            'details' => 'Tallas: 8, 9, 10, y 11',
            'price' => 150.00,
            'description' => 'Gucci color blanco',
            'image_path' => 'guchii.jpg'
        ]);

        Product::create([
            'name' => 'Jordan',
            'slug' => 'jordan',
            'details' => 'Tallas: 8, 9, 10, y 11',
            'price' => 65.00,
            'description' => 'Jordan nike retro 4',
            'image_path' => 'jordan4.jpg'
        ]);

        Product::create([
            'name' => 'Lacoste',
            'slug' => 'lacoste',
            'details' => 'Tallas: 8, 9, 10, y 11',
            'price' => 75.00,
            'description' => 'Lacoste color blanco bajitos',
            'image_path' => 'lacoste.jpg'
        ]);

        Product::create([
            'name' => 'Levis',
            'slug' => 'levis',
            'details' => 'Tallas: 8, 9, 10, y 11',
            'price' => 80.00,
            'description' => 'Levis color negro ',
            'image_path' => 'levis.jpg'
        ]);

        Product::create([
            'name' => 'Nike',
            'slug' => 'nike',
            'details' => 'Tallas: 8, 9, 10, y 11',
            'price' => 80.00,
            'description' => 'nike air blancos personalizados',
            'image_path' => 'nikeair.jpg'
        ]);
        Product::create([
            'name' => 'Polo',
            'slug' => 'polo',
            'details' => 'Tallas: 8, 9, 10, y 11',
            'price' => 65.00,
            'description' => 'polo color cafe con negro',
            'image_path' => 'polo.jpg'
        ]);
        Product::create([
            'name' => 'Puma',
            'slug' => 'puma',
            'details' => 'Tallas: 8, 9, 10, y 11',
            'price' => 85.00,
            'description' => 'Puma negros',
            'image_path' => 'puma.jpg'
        ]);
        Product::create([
            'name' => 'Timberland',
            'slug' => 'timberland',
            'details' => 'Tallas: 8, 9, 10, y 11',
            'price' => 100.00,
            'description' => 'Timberland color cafe bota completa',
            'image_path' => 'timberland.jpg'
        ]);
        Product::create([
            'name' => 'Tommi',
            'slug' => 'tommi',
            'details' => 'Tallas: 8, 9, 10, y 11',
            'price' => 75.00,
            'description' => 'Tommi color blanco',
            'image_path' => 'tommi.jpg'
        ]);
    }
}
