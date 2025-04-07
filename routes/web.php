<?php


use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherrController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchesController;
use App\Http\Controllers\EnrollmentController;
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

//teacher

Route::get('/teacher/index',[TeacherrController::class,'index'])->name('teacher.index');
Route::get('/teacher/create',[TeacherrController::class,'create'])->name('teacher.create');
Route:: POST('/teacher/store',[TeacherrController::class,'store'])->name('teacher.store');
//Route::get('/teacher/show',[TeacherrController::class,'show'])->name('teacher.show');
Route:: get('/teacher/edit/{id}',[TeacherrController::class,'edit'])->name('teacher.edit');
Route:: POST('/teacher/update/{id}',[TeacherrController::class,'update'])->name('teacher.update');
Route:: get('/teacher/delete/{id}',[TeacherrController::class,'destroy'])->name('teacher.delete');

//courses

Route::get('/course/index',[CourseController::class,'index'])->name('course.index');
Route::get('/course/create',[CourseController::class,'create'])->name('course.create');
Route:: POST('/course/store',[CourseController::class,'store'])->name('course.store');
//Route::get('/course/show',[CourseController::class,'show'])->name('course.show');
Route:: get('/course/edit/{id}',[CourseController::class,'edit'])->name('course.edit');
Route:: POST('/course/update/{id}',[CourseController::class,'update'])->name('course.update');
Route:: get('/course/delete/{id}',[CourseController::class,'destroy'])->name('course.delete');

//batches

Route::get('/batches/index',[BatchesController::class,'index'])->name('batches.index');
Route::get('/batches/create',[BatchesController::class,'create'])->name('batches.create');
Route:: POST('/batches/store',[BatchesController::class,'store'])->name('batches.store');
//Route::get('/batches/show',[BatchesController::class,'show'])->name('batches.show');
Route:: get('/batches/edit/{id}',[BatchesController::class,'edit'])->name('batches.edit');
Route:: POST('/batches/update/{id}',[BatchesController::class,'update'])->name('batches.update');
Route:: get('/batches/delete/{id}',[BatchesController::class,'destroy'])->name('batches.delete');

//enrollment

Route::get('/enroll/index',[EnrollmentController::class,'index'])->name('enroll.index');
Route::get('/enroll/create',[EnrollmentController::class,'create'])->name('enroll.create');
Route:: POST('/enroll/store',[EnrollmentController::class,'store'])->name('enroll.store');
//Route::get('/enroll/show',EnrollmentController::class,'show'])->name('enroll.show');
Route:: get('/enroll/edit/{id}',[EnrollmentController::class,'edit'])->name('enroll.edit');
Route:: POST('/enroll/update/{id}',[EnrollmentController::class,'update'])->name('enroll.update');
Route:: get('/enroll/delete/{id}',[EnrollmentController::class,'destroy'])->name('enroll.delete');




