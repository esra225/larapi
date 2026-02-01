<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TeacherController;

Route::get('/teachers', [TeacherController::class, 'indexView'])->name('teachers.index');
Route::get('/teachers/create', [TeacherController::class, 'create'])->name('teachers.create');
Route::post('/teachers', [TeacherController::class, 'store'])->name('teachers.store');
