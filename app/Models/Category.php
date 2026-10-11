<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Mengizinkan pengisian nama kategori
    protected $fillable = ['name'];

    // Relasi: Satu Kategori memiliki Banyak Produk (hasMany)
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}