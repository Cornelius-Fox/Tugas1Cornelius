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

Route::get('/about/{nama?}', function ($nama = "Gak Tau") {
    $angka = [1,2,3,4,5];

    return view(
        'Tugas1.index.about',
    compact('angka', 'nama')
    );
});

 Route::get('/portofolio/{kertas?}', function ($kertas = "Gak Tau") {
     $angka = [1,2,3,4,5];

     return view(
         'Tugas1.Portofolio.portofolio',
         compact('angka','kertas')
     );

 });
