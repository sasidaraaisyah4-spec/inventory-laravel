<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Mengizinkan pengisian kolom-kolom ini
    protected $fillable = ['category_id', 'sku', 'name', 'price', 'stock'];

    // Relasi: Banyak Produk dimiliki oleh Satu Kategori (belongsTo)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}