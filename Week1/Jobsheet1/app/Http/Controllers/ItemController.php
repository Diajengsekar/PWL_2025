<?php

namespace App\Http\Controllers; // Menentukan namespace untuk controller

use App\Models\Item; // Mengimpor model Item untuk berinteraksi dengan database
use Illuminate\Http\Request; // Mengimpor Request untuk menangani input dari pengguna

class ItemController extends Controller // Mendefinisikan class ItemController yang merupakan turunan dari Controller utama Laravel
{
    public function index() // Method untuk menampilkan semua item
    {
        $items = Item::all(); // Mengambil semua data dari tabel items
        return view('items.index', compact('items')); // Mengirim data ke view items.index
    }

    public function create() // Method untuk menampilkan form tambah item
    {
        return view('items.create'); // Mengembalikan tampilan form tambah item
    }

    public function store(Request $request) // Method untuk menyimpan item baru ke database
    {
        $request->validate([
            'name' => 'required', // Validasi agar name tidak boleh kosong
            'description' => 'required', // Validasi agar description tidak boleh kosong
        ]);

        Item::create($request->only(['name', 'description'])); // Menyimpan data yang telah divalidasi ke database
        return redirect()->route('items.index')->with('success', 'Item added successfully.'); // Redirect ke halaman index dengan pesan sukses
    }

    public function show(Item $item) // Method untuk menampilkan detail item
    {
        return view('items.show', compact('item')); // Mengembalikan tampilan detail item
    }

    public function edit(Item $item) // Method untuk menampilkan form edit item
    {
        return view('items.edit', compact('item')); // Mengembalikan tampilan edit item dengan data item yang dipilih
    }

    public function update(Request $request, Item $item) // Method untuk mengupdate item di database
    {
        $request->validate([
            'name' => 'required', // Validasi agar name tidak boleh kosong
            'description' => 'required', // Validasi agar description tidak boleh kosong
        ]);

        $item->update($request->only(['name', 'description'])); // Mengupdate item dengan data yang telah divalidasi
        return redirect()->route('items.index')->with('success', 'Item updated successfully.'); // Redirect ke halaman index dengan pesan sukses
    }

    public function destroy(Item $item) // Method untuk menghapus item dari database
    {
        $item->delete(); // Menghapus item dari database
        return redirect()->route('items.index')->with('success', 'Item deleted successfully.'); // Redirect ke halaman index dengan pesan sukses
    }
}
