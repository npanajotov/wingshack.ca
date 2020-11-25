<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('delivery-area', [PageController::class, 'deliveryArea'])->name('delivery-area');
Route::get('sauces', [PageController::class, 'sauces'])->name('sauces');
Route::get('about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('join-the-club', [PageController::class, 'joinTheClub'])->name('join-the-club');
Route::get('contact', [PageController::class, 'contact'])->name('contact');

Route::post('form-contact', [FormController::class, 'contact'])->name('form-contact');
Route::post('form-join-the-club', [FormController::class, 'joinTheClub'])->name('form-join-the-club');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
