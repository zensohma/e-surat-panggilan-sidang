<?php

use App\Models\PanggilanSidang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;


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

Route::get('/', function () {
    return view('surat.index', [
        'surats' => PanggilanSidang::all(),
    ]);
});

Route::get('/surat/cetak/{id}', [SuratController::class, 'exportPDF'])->name('surat.cetak.index');
Route::resource('surat', SuratController::class);
Route::get('suratexport', [SuratController::class, 'exportExcel'])->name('surat.export');
