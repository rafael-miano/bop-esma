<?php

use App\Livewire\Attendees\TableList;
use App\Livewire\PublicForm;
use App\Livewire\ThankYou;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::get('/attendance', PublicForm::class)->name('attendance');
Route::get('/thank-you', ThankYou::class)->name('attendee.thank-you');

Route::middleware(['auth', 'verified'])->group(fn() => [
    Route::view('dashboard', 'dashboard')
        ->name('dashboard'),
    Route::view('qr-code', 'qr')
        ->name('qr-code')
]);



Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
