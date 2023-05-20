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

Route::get('/', function () {
    // return view('welcome');
    return redirect(route('family.index'));
});

Route::get('/family', \App\Http\Livewire\Family\Index::class)->name('family.index');
Route::get('/family/create', \App\Http\Livewire\Family\Create::class)->name('family.create');
Route::get('/family/{familyId}/edit', \App\Http\Livewire\Family\Edit::class)->name('family.edit');
// Route::put('/family/{family}', \App\Http\Livewire\Family\Update::class)->name('family.update');
Route::get('/family/{familyId}/delete', \App\Http\Livewire\Family\Delete::class)->name('family.delete');
