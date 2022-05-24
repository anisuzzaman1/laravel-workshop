<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/about', function () {
    // Get View
    return view('about');
    // Get Redirect View
    // return redirect('contact');
});

// Direct Return View File
// Route::view('/about', 'about');

Route::get('/contact', function () {
    return view('contact');

    // return "My Roll is: $roll";
    // http://127.0.0.1:8000/contact/100

});
*/

Route::get('/xxxxxxxxxxxxxxxxxxxxx', function () {
    return view('about');
})->name('about.us');

Route::get('/zzzzzzzzzzzzzzzzzzzzzz', function () {
    return view('contact');
})->name('contact.us');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
