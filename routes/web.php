<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
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
    return view('layout');
   
});

Route::get('/', function () {
    return view('dashboard');
   
});



//Route::resource('students', StudentController::class);
Route:: get('/student/index',[StudentController::class,'index'])->name('student.index');

Route:: get('/student/create',[StudentController::class,'create'])->name('student.create');
Route:: POST('/student/store',[StudentController::class,'store'])->name('student.store');
Route:: get('/student/show',[StudentController::class,'show'])->name('student.show');
Route:: get('/student/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
Route:: POST('/student/update/{id}',[StudentController::class,'update'])->name('student.update');
Route:: get('/student/delete/{id}',[StudentController::class,'destroy'])->name('student.delete');

//subject
Route::get('/subject/create',[SubjectController::class,'index'])->name('subject.create');
Route:: POST('/subject/store',[SubjectController::class,'store'])->name('subject.store');
Route::get('/subject/show',[SubjectController::class,'show'])->name('subject.show');
Route:: get('/subject/edit/{id}',[SubjectController::class,'edit'])->name('subject.edit');
Route:: POST('/subject/update/{id}',[SubjectController::class,'update'])->name('subject.update');
Route:: get('/subject/delete/{id}',[SubjectController::class,'destroy'])->name('subject.delete');