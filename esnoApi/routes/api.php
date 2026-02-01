<?php

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;

Route::get('/teachers', [TeacherController::class, 'index']);
Route::post('/teachers', [TeacherController::class, 'store']);

Route::get('/departments', [DepartmentController::class, 'index']);




// API تاع المعلمين
// Route::get('/teachers', [TeacherController::class, 'index']); // GET: عرض المعلمين

// API تاع إضافة معلم
// Route::post('/teachers', [TeacherController::class, 'store']); // POST: إضافة معلم
