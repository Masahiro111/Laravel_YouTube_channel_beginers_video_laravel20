<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
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

Route::get('/about', function () {
    // return view('about');
    return redirect('about-laravel');
});

Route::get('/about-laravel', function () {
    return view('about');
});

Route::get('/about-dl', function () {
    return response()->download(public_path('about.txt'));
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/migration', function () {
    $user = User::query()
        ->create([
            'name' => 'Taro',
            'email' => 'taro@example.com',
            'password' => Hash::make('password'),
        ]);

    return $user;
});
