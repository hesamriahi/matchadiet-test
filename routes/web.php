<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Home::class)->name('home');


Route::get('test', [\App\Http\Controllers\testController::class, 'index']);