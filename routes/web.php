<?php

use App\Models\Logement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogementController;

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
    return view('index');
})->name('accueil');
//Route::resource('logement','App\Http\Controllers\LogementController');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/reservation/nouveau', function () {
    return view('reservation/form-nouveau-reservation');
})->name('nouvelle-reservation');


Route::get('/logement/nouveau', function () {
    return view('logement/form-nouveau-logement');
})->name('nouveau-logement');

Route::get('/logement/liste', function () {
    return view('logement/liste');
})->name('liste-logements');

Route::get('/logement/{logement}', function (Logement $logement) {
    return view('logement/view',['logement' => $logement]);
});




