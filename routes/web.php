<?php

use App\Models\Logement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ReservationController;

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


Route::get('/accueil', function () {
    return view('components.accueil');
})->name('accueil2');

Route::get('/apropos', function () {
    return view('apropos');
})->name('adzap_et_la_ville');

Route::get('/options', function () {
    return view('options');
})->name('options');

Route::get('send-mail', [MailController::class, 'index']);

Route::get('/contact', function () {
    return view('contact');
})->name('contactez-nous');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/reservation/nouveau', function () {
    return view('reservation/form-nouveau-reservation');
})->middleware('web','auth')->name('nouvelle-reservation');



Route::get('/reservation/liste', function () {
    return view('reservation/reservations-datatable');
})->middleware('web','auth')->name('liste-reservations');

Route::get('/reservation/calendrier', function () {
    return view('reservation/reservations-calendar');
})->middleware('web','auth')->name('liste-reservations-calendrier');

Route::get('/reservation/{reservation_id}', [ReservationController::class, 'show'])->middleware('web','auth');

Route::get('/logement/nouveau', function () {
    return view('logement/form-nouveau-logement');
})->middleware('web','auth')->name('nouveau-logement');

Route::get('/logement/liste', function () {
    return view('logement/liste');
})->name('liste-logements');

Route::get('/logement/{logement}', function (Logement $logement) {
    return view('logement/view',['logement' => $logement]);
})->middleware('web','auth');

Route::get('/utilisateurs/liste', function () {
    return view('utilisateur/utilisateurs-datatable');
})->middleware('web','auth')->name('liste-utilisateurs');




