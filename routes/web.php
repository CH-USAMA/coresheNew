<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgotPasswordController;
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
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// staff
Route::get('/uploadDocument', [App\Http\Controllers\StaffController::class, 'uploadDocument'])->name('uploadDocument');
Route::get('/editDocument/{id}', [App\Http\Controllers\DocumentController::class, 'editDocument'])->name('editDocument');

Route::post('/uploadDocument', [App\Http\Controllers\DocumentController::class, 'uploadDocumentsave'])->name('uploadDocumentsave');




// Candidate
// Route::get('/homeCandidate', [App\Http\Controllers\CandidateController::class, 'index'])->name('homeCandidate');


// Admin
// Route::get('/homeAdmin', [App\Http\Controllers\AdminController::class, 'index'])->name('homeAdmin');

Route::get('/electionDetails', [App\Http\Controllers\AdminController::class, 'electionDetails'])->name('electionDetails');
Route::get('/candidates', [App\Http\Controllers\AdminController::class, 'systemCandidates'])->name('systemCandidates');
Route::post('/saveCandidate', [App\Http\Controllers\AdminController::class, 'saveCandidate'])->name('saveCandidate');
Route::post('/updateCandidate', [App\Http\Controllers\AdminController::class, 'updateCandidate'])->name('updateCandidate');
Route::post('/deleteCandidate', [App\Http\Controllers\AdminController::class, 'deleteCandidate'])->name('deleteCandidate');


Route::post('/getCandidate', [App\Http\Controllers\AdminController::class, 'getCandidate'])->name('getCandidate');

Route::post('/getElectionCandidate', [App\Http\Controllers\AdminController::class, 'getElectionCandidate'])->name('getElectionCandidate');




// -- Export ElectionDetails
Route::get('/export', [App\Http\Controllers\AdminController::class, 'export'])->name('export');
// -- Import ElectionDetails
Route::post('/import', [App\Http\Controllers\AdminController::class, 'importElectionDetails'])->name('importElectionDetails');


// -- Export Candidate
Route::get('/exportCandidate', [App\Http\Controllers\AdminController::class, 'exportCandidate'])->name('exportCandidate');
// -- Import Candidate
Route::post('/importCandidate', [App\Http\Controllers\AdminController::class, 'importCandidate'])->name('importCandidate');





// Forgot Password
Route::get('/forgotPassword', [App\Http\Controllers\InviteController::class, 'forgotPassword'])->middleware('guest')->name('forgotPassword');


Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->middleware('guest')->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->middleware('guest')->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->middleware('guest')->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->middleware('guest')->name('reset.password.post');

Route::get('send-mail', function () {
   
    $token = "123213213";
   
    \Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\ResetPassword($token));
   
    dd("Email is Sent.");
});


Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logoutCustom');



Route::resource('gallery',App\Http\Controllers\GalleryController::class)->middleware('auth');
Route::get('getimages',[App\Http\Controllers\GalleryController::class,'getImages']);
Route::post('image/delete',[App\Http\Controllers\GalleryController::class,'destroy']); 
