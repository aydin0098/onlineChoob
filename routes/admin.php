<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', App\Livewire\Admin\Dashboard\Index::class)->name('admin.index');
//Sliders
Route::get('sliders',App\Livewire\Admin\Sliders\Index::class)->name('slider.index');
Route::get('sliders/{slider}/edit',App\Livewire\Admin\Sliders\Edit::class)->name('slider.update');
