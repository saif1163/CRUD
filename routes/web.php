<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Promise\Create;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/student', function (){
//     return view ('student');
// });
// Route::get('/student', [StudentController::class, 'show_student'])->name('student');
// Route::get('/student/create', [StudentController::class, 'create_student'])->name('create_student');
// Route::get('/student/edit', [StudentController::class, 'edit_student'])->name('edit_student');
// Route::get('/student/delete', [StudentController::class, 'delete_student'])->name('delete_student');

Route::get('/users',[UserController::class,'index'])->name('users');
Route::get('/user/create',[UserController::class,'create'])->name('user.create');
Route::post('/user/create',[UserController::class,'store']);
