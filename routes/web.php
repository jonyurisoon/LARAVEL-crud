<?php

use App\Http\Controllers\StudentController;
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
    return view('welcome');
});

Route::get('/students', [StudentController::class, 'index'])->name('students.index');

Route::get('/students/add', [StudentController::class, 'add'])->name('students.add');

Route::post('/students', [StudentController::class, 'store'])->name('students.store');

Route::get('/students/edit/{student}', [StudentController::class, 'edit'])->name('students.edit');

Route::put('/students/update/{student}', [StudentController::class, 'update'])->name('students.update');

Route::delete('/students/delete/{student}', [StudentController::class, 'delete'])->name('students.delete');
