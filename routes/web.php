<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

Route::post('/submit', function (Request $request) {
    // Валидация данных
    $validatedData = $request->validate([
        'iin' => 'required|string|max:12',
        'name' => 'required|string|max:255',
        'number' => 'required|string|max:20',
        'wa' => 'required|string|max:20',
        'region' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'adress' => 'required|string|max:255',
    ]);

    // Сохранение данных в таблицу orders
    DB::table('orders')->insert([
        'iin' => $validatedData['iin'],
        'name' => $validatedData['name'],
        'number' => $validatedData['number'],
        'wa' => $validatedData['wa'],
        'region' => $validatedData['region'],
        'city' => $validatedData['city'],
        'adress' => $validatedData['adress'],
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect('/')->with('success', 'Форма успешно отправлена!');
});

Route::get('/', function () {
    return view('welcome', ['locale' => 'ru']);
})->name('home');

Route::get('/kz', function () {
    return view('welcome', ['locale' => 'kz']);
})->name('home.kz');
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
