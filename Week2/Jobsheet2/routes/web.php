<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;

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

Route::get('/hello', function () {
    return 'Hello';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM : 2341760070 , Nama : Diajeng Sekar Arum';
});

Route::get('/user/{Diajeng}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
    });

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });

    Route::get('/hello', [WelcomeController::class, 'hello']);

    Route::resource('photos', PhotoController::class);

    Route::resource('photos', PhotoController::class)->only([
        'index', 'show'
    ]);
    
    Route::resource('photos', PhotoController::class)->except([
        'create', 'store', 'update', 'destroy'
    ]);

    Route::get('/greeting', function () {
        return view('hello', ['name' => 'Diajeng']);
    });
    
    Route::get('/greeting', function () {
        return view('blog.hello', ['name' => 'Diajeng']);
    });

    Route::get('/greeting', [WelcomeController::class, 'greeting']);
    