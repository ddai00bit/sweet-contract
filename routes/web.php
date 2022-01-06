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

Route::get('/dynamic_pdf',[\App\Http\Controllers\PDFController::class, 'index'])->name('demo.pdf');
Route::get('/dynamic_pdf_true',[\App\Http\Controllers\PDFController::class, 'export_pdf'])->name('export.pdf');

Route::get('/dangky',[\App\Http\Controllers\PDFController::class, 'login'])->name('dangky');
Route::post('/register',[\App\Http\Controllers\PartnerController::class, 'register'])->name('register');
