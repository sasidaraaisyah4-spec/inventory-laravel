@extends('layouts.app')

@section('content')
    <h2>Daftar Inventory Pakaian</h2>
    
    <!-- Pesan Sukses -->
    @if(session('success'))
        <div style="background-color: #A3BE8C; color: #2E3440; padding: 10px; border-radius: 5px; margin-bottom: 15px; font-weight: bold;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tombol Tambah Data -->
    <div style="margin-bottom: 20px;">
        <a href="{{ route('products.create') }}" style="background-color: #88C0D0; color: #2E3440; padding: 10px 15px; text-decoration: none; border-radius: 5px; font-weight: bold;">+ Tambah Pakaian</a>
    </div>
    
    <!-- Form Pencarian (Search) -->
    <!-- ... (Kode tabel yang lama biarkan saja di bawah sini) ... -->
    
    <!-- Form Pencarian (Search) -->
    <form method="GET" action="{{ route('products.index') }}" style="margin-bottom: 20px;">
        <input type="text" name="search" placeholder="Cari Nama / SKU..." value="{{ request('search') }}">
        <button type="submit">Cari Data</button>
    </form>

    <!-- Tabel Data -->
    <table>
        <thead>
            <tr>
                <th>SKU</th>
                <th>Nama Pakaian</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <tr>
                    <td>{{ $product->sku }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name ?? '-' }}</td>
                    <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                    <td>{{ $product->stock }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center;">Belum ada data pakaian.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    
    <!-- Fitur Pagination -->
    <div style="margin-top: 20px;">
        {{ $products->links() }}
    </div>
@endsection