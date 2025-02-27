<!DOCTYPE html> 
<html> 
<head>
    <title>Item List</title> 
</head>
<body> 
    <h1>Items</h1> <!-- Menampilkan judul utama "Items" -->

    @if(session('success')) <!-- Mengecek apakah ada pesan sukses dalam session -->
        <p>{{ session('success') }}</p> <!-- Menampilkan pesan sukses jika ada -->
    @endif <!-- Menutup blok kondisi @if -->

    <a href="{{ route('items.create') }}">Add Item</a> <!-- Link untuk menambahkan item baru -->

    <ul> 
        @foreach($items as $item) <!-- Memulai perulangan untuk setiap item dalam variabel $items -->
            <li> <!-- Membuka elemen daftar untuk setiap item -->
                {{ $item->name }} - <!-- Menampilkan nama item -->

                <a href="{{ route('items.edit', $item) }}">Edit</a> <!-- Tautan untuk mengedit item -->

                <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;"> <!-- Formulir untuk menghapus item -->
                    @csrf <!-- Menambahkan token CSRF untuk keamanan -->
                    @method('DELETE') <!-- Mengubah metode POST menjadi DELETE -->
                    <button type="submit">Delete</button> <!-- Tombol untuk menghapus item -->
                </form>
            </li> 
        @endforeach <!-- Menutup perulangan @foreach -->
    </ul> 
</body> 
</html>
