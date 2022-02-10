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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $data = [
        'name' => 'Christian',
        'lastname' => 'Ferrazzano',
        'age' => '28'
    ];
    return view('home', $data);
})->name('home');

Route::get('/contacts', function () {
    $data = [
        'telephone' => '3284828246',
        'email' => 'christian@gmail.com',
    ];
    return view('contacts', $data);
})->name('contacts');

Route::get('/bio', function () {
    $data = [
        'description' => 'Lorem ipsum',
    ];
    return view('bio', $data);
})->name('bio');
