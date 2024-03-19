<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/', function () {
    return view ('index', [
        "title" => "Beranda",
        "gambar" => "logo1.png"
    ]);
});



Route::get('/cerpen', function () {
    return view ('cerpen', [
        "title" => "Cerpen"
    ]);
});

Route::get('/author', function () {
    return view('author');
});
Route::get('/author', 'AuthorController@index')->name('author');

Route::resource('/contact', ContactController::class);

Auth::routes();

Route::group(['middleware'=>['auth']], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contact/index', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
    Route::get('/contact/{id}/update', [ContactController::class, 'update'])->name('contact.update');
    Route::get('/contact/{id}/destroy', [ContactController::class, 'destroy'])->name('contact.destroy');
});
