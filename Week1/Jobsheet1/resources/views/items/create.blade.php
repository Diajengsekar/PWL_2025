<!DOCTYPE html> 
<html>
<head>
    <title>Add Item</title> <!-- Menentukan judul halaman -->
</head>
<body>
    <h1>Add Item</h1> <!-- Judul utama halaman -->

    <form action="{{ route('items.store') }}" method="POST"> <!-- Form untuk menambahkan item, dikirim ke route items.store menggunakan metode POST -->
        @csrf <!-- Token CSRF untuk keamanan, mencegah serangan CSRF -->
        
        <label for="name">Name:</label> <!-- Label untuk input nama -->
        <input type="text" name="name" required> <!-- Input untuk nama item, wajib diisi -->
        <br>

        <label for="description">Description:</label> <!-- Label untuk input deskripsi -->
        <textarea name="description" required></textarea> <!-- Input textarea untuk deskripsi item, wajib diisi -->
        <br>

        <button type="submit">Add Item</button> <!-- Tombol untuk menambahkan item -->
    </form>

    <a href="{{ route('items.index') }}">Back to List</a> 
</body>
</html>
