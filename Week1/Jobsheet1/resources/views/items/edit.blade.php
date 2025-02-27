<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title> <!-- Menetapkan judul halaman sebagai "Edit Item" -->
</head>
<body>
    <h1>Edit Item</h1> <!-- Menampilkan judul utama "Edit Item" -->

    <form action="{{ route('items.update', $item) }}" method="POST"> <!-- Formulir untuk memperbarui item, menggunakan metode POST -->
        @csrf <!-- Token CSRF untuk mencegah serangan CSRF -->
        @method('PUT') <!-- Mengubah metode POST menjadi PUT untuk update data -->

        <label for="name">Name:</label> <!-- Label untuk input nama item -->
        <input type="text" name="name" value="{{ $item->name }}" required> <!-- Input untuk nama item, dengan nilai awal dari database -->
        <br>

        <label for="description">Description:</label> <!-- Label untuk input deskripsi item -->
        <textarea name="description" required>{{ $item->description }}</textarea> <!-- Input textarea untuk deskripsi item, dengan nilai awal dari database -->
        <br>

        <button type="submit">Update Item</button> <!-- Tombol untuk mengirimkan perubahan -->
    </form>

    <a href="{{ route('items.index') }}">Back to List</a> <!-- Link untuk kembali ke daftar item -->
</body>
</html>
