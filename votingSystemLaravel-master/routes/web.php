<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/logout', [App\Http\Controllers\logoutController::class,'index'])->name('logout');

Route::get('/voterSignUp', [App\Http\Controllers\voterSignUpController::class, 'show'])->name('voterSignUp');
Route::get('/voterSignUpComplete', [App\Http\Controllers\voterSignUpCompleteController::class, 'check'])->name('voterSignUpComplete');
Route::get('/voterLogin', [App\Http\Controllers\voterLoginController::class, 'show'])->name('voterLogin');
Route::get('/voterLoginComplete', [App\Http\Controllers\voterLoginCompleteController::class, 'show'])->name('voterLoginComplete');
Route::get('/voterPanel', [App\Http\Controllers\voterPanelController::class, 'show'])->name('voterPanel');


Route::get('/commissionerSignUp', [App\Http\Controllers\commissionerSignUpController::class, 'show'])->name('commissionerSignUp');
Route::get('/commissionerSignUpComplete', [App\Http\Controllers\commissionerSignUpCompleteController::class, 'show'])->name('commissionerSignUpComplete');
Route::get('/commissionerLogin', [App\Http\Controllers\commissionerLoginController::class, 'show'])->name('commissionerLogin');
Route::get('/commissionerLoginComplete', [App\Http\Controllers\commissionerLoginCompleteController::class, 'show'])->name('commissionerLoginComplete');
Route::get('/commissionerPanel', [App\Http\Controllers\commissionerPanelController::class, 'show'])->name('commissionerPanel');


Route::get('/create-timer', [App\Http\Controllers\timerController::class,'create'])->name('create-timer');
Route::post('/update-timer', [App\Http\Controllers\timerController::class,'update'])->name('timer.update');
Route::get('/view-timer', [App\Http\Controllers\timerController::class,'view'])->name('view-timer');



Route::get('/apply', [App\Http\Controllers\applyController::class,'show'])->name('apply');
Route::get('/applyComplete/{email}', [App\Http\Controllers\applyCompleteController::class,'save'])->name('applyComplete');




Route::get('/accept', [App\Http\Controllers\acceptController::class,'show'])->name('accept');


Route::get('/title', [App\Http\Controllers\titleController::class,'show'])->name('title');
Route::get('/titleComplete', [App\Http\Controllers\titleCompleteController::class,'show'])->name('titleComplete');



Route::get('/final/{email}', [App\Http\Controllers\finalController::class,'show'])->name('final');
Route::get('/finalDelete/{email}', [App\Http\Controllers\finalController::class,'delete'])->name('finalDelete');


Route::post('file-upload/{email}', [App\Http\Controllers\finalCompleteController::class,'fileUploadPost'])->name('file.upload.post');


Route::get('/results', [App\Http\Controllers\resultController::class,'show'])->name('results');


Route::get('/vote', [App\Http\Controllers\voteController::class,'show'])->name('vote');
Route::get('/voteComplete', [App\Http\Controllers\voteCompleteController::class,'show'])->name('voteComplete');


Route::get('/expire', [App\Http\Controllers\expireController::class,'show'])->name('expire');
