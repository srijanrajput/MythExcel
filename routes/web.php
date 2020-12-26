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

Route::get('/date', [App\Http\Controllers\DateRangeController::class, 'index']);

// Route for export/download tabledata to .csv, .xls or .xlsx
Route::get('/exportExcel', [App\Http\Controllers\DateRangeController::class, 'exportExcel'])->name('exportExcel');