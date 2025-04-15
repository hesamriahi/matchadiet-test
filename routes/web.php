<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Home::class)->name('home');


Route::get('test', function (){
    $value = (int)round((1 / 17) * 100);
    dd(class_basename($this).".".__function__." HERE", $value);
});