@extends('layouts.app')

@section('content')
    <h2>Tambah Pakaian Baru</h2>

    <form method="POST" action="{{ route('products.store') }}" style="background-color: #3B4252; padding: 25px; border-radius: 8px; max-width: 500px;">
        {{-- @csrf wajib ada di Laravel untuk keamanan form --}}
        @csrf 

        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px;">SKU (Kode Barang):</label>
            <input type="text" name="sku" value="{{ old('sku') }}" style="width: 100%; box-sizing: border-box;">
            @error('sku') <small style="color: #FF5555;">{{ $message }}</small> @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px;">Nama Pakaian:</label>
            <input type="text" name="name" value="{{ old('name') }}" style="width: 100%; box-sizing: border-box;">
            @error('name') <small style="color: #FF5555;">{{ $message }}</small> @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px;">Kategori:</label>
            <select name="category_id" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #434C5E; background-color: #4C566A; color: #ECEFF4;">
                <option value="">-- Pilih Kategori --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id') <small style="color: #FF5555;">{{ $message }}</small> @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px;">Harga (Rp):</label>
            <input type="number" name="price" value="{{ old('price') }}" style="width: 100%; box-sizing: border-box;">
            @error('price') <small style="color: #FF5555;">{{ $message }}</small> @enderror
        </div>

        <div style="margin-bottom: 25px;">
            <label style="display: block; margin-bottom: 5px;">Stok Awal:</label>
            <input type="number" name="stock" value="{{ old('stock') }}" style="width: 100%; box-sizing: border-box;">
            @error('stock') <small style="color: #FF5555;">{{ $message }}</small> @enderror
        </div>

        <button type="submit" style="background-color: #88C0D0; color: #2E3440;">Simpan Data</button>
        <a href="{{ route('products.index') }}" style="color: #D8DEE9; margin-left: 15px; text-decoration: none;">Batal</a>
    </form>
@endsection