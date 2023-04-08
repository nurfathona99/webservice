<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstitutionsController;


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
    return view('welcome');
});

Route::get('test/{id}', [App\Http\Controllers\TestController::class, 'index']);

Route::get('course', [App\Http\Controllers\CourseController::class, 'index'])->name('course.index');
Route::get('institutions', [InstitutionsController::class, 'index'])->name('institutions.index');

Route::get('/jurnal/form-tambah', [App\Http\Controllers\CourseController::class, 'create'])->name('jurnal.create');
// route form simpan data
Route::post('/jurnal/simpan', [App\Http\Controllers\CourseController::class, 'store'])->name('jurnal.store');
Route::get('course/{id}/edit',[App\Http\Controllers\CourseController::class, 'edit'])->name('jurnal.edit');
Route::get('course/{id}/delete', [App\Http\Controllers\CourseController::class, 'destroy'])->name('course.delete');

