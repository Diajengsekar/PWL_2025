<?php

use Illuminate\Support\Facades\Route; // Mengimpor kelas Route dari Laravel
use App\Http\Controllers\ItemController; // Mengimpor ItemController yang akan digunakan untuk menangani permintaan terkait item

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { // Menentukan route untuk halaman utama ('/')
    return view('welcome'); // Mengembalikan tampilan 'welcome.blade.php' sebagai halaman utama
});

Route::resource('items', ItemController::class); // Membuat resource route untuk items yang otomatis mencakup semua metode CRUD (Create, Read, Update, Delete)
