<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category; // Tambahkan baris ini untuk memanggil model Category
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // ... (Kode index yang sebelumnya sudah ada jangan dihapus) ...
        $products = Product::with('category')
            ->when($request->search, function ($query, $search) {
                $query->where('name', 'like', "%{$search}%")
                      ->orWhere('sku', 'like', "%{$search}%");
            })
            ->orderBy('name')
            ->paginate(10)
            ->withQueryString();

        return view('products.index', compact('products'));
    }

    // 1. Menampilkan halaman form tambah pakaian
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    // 2. Memvalidasi dan menyimpan data ke database
    public function store(Request $request)
    {
        // Validasi input agar tidak boleh kosong atau salah format
        $validated = $request->validate([
            'sku'         => 'required|unique:products,sku',
            'name'        => 'required|string|max:150',
            'category_id' => 'required|exists:categories,id',
            'price'       => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
        ], [
            'sku.unique' => 'SKU ini sudah terdaftar!',
            'required' => 'Kolom ini wajib diisi!'
        ]);

        // Simpan ke database
        Product::create($validated);

        // Redirect (kembali) ke halaman utama dengan pesan sukses
        return redirect()->route('products.index')->with('success', 'Pakaian baru berhasil ditambahkan!');
    }
}