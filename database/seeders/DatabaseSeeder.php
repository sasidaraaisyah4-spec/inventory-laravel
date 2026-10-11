<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // 1. Buat Data Kategori
        $kategori1 = Category::create(['name' => 'Kemeja']);
        $kategori2 = Category::create(['name' => 'Celana']);

        // 2. Buat Data Produk
        Product::create([
            'category_id' => $kategori1->id,
            'sku' => 'KMJ-001',
            'name' => 'Kemeja Flanel Kotak',
            'price' => 150000,
            'stock' => 20
        ]);

        Product::create([
            'category_id' => $kategori2->id,
            'sku' => 'CLN-001',
            'name' => 'Celana Jeans Denim',
            'price' => 250000,
            'stock' => 15
        ]);
    }
}