<?php
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/home', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});  

Route::get('/Schedules', [ScheduleController::class, 'index'])->name('Schedule');

Route::get('/upload', [UploadController::class, 'showUploadForm'])->name('upload.form');
Route::post('/upload', [UploadController::class, 'uploadFile'])->name('upload.file');



Route::get('/dashboard', [DashboardController::class, 'index']);


Route::get('/friends', [FriendController::class, 'index'])->name('friends.index');
Route::post('/friends/upload', [FriendController::class, 'uploadStory'])->name('friends.upload');


Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);







   