<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// Test route for Livewire component
Route::get('/test-livewire', fn() => view('test-livewire'));

Route::get('/', [MainController::class, 'storeFront'])
    ->name('storeFront');
Route::get('/catfilter', [MainController::class, 'catFilter'])
    ->name('catFilter');
