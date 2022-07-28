<?php

use App\Http\Controllers\ListWifiController;
use Illuminate\Support\Facades\Route;

// Route::resource('listwifi', 'ListWifiController');
Route::get('/', [ListWifiController::class, 'index']);
Route::delete('listwifi/delete', [ListWifiController::class, 'destroy'])->name('DeleteList');
Route::post('/listwifi/import', [ListWifiController::class, 'import'])->name('import');
Route::get('/export', [ListWifiController::class, 'export'])->name('export');

Route::get('wifi/list', [ListWifiController::class, 'getWifi'])->name('wifi.list');
