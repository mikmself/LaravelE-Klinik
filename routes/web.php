<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DoctorController;
use \App\Http\Controllers\PatientController;
use \App\Http\Controllers\MedicineController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\PracticeScheduleController;
use \App\Http\Controllers\MedicRecordController;
use \App\Http\Controllers\RegistrationController;
Route::get('/', function () {return view('index');});
Route::prefix('user')->middleware('auth')->group(function (){
    Route::get('/registration',[\App\Http\Controllers\HomeController::class,'registration'])->name('registration');
    Route::post('/store-registration',[\App\Http\Controllers\HomeController::class,'storeRegistration'])->name('store-registration');
    Route::get('/medic-record',[\App\Http\Controllers\HomeController::class,'medicRecord'])->name('medic-record');
});
Route::prefix('/admin/dashboard')->middleware(['auth','ceklevel'])->group(function (){
    Route::prefix('doctor')->group(function (){
        Route::get('/',[DoctorController::class,'index'])->name('index-doctor');
        Route::get('/create',[DoctorController::class,'create'])->name('create-doctor');
        Route::post('/store',[DoctorController::class,'store'])->name('store-doctor');
        Route::get('/edit/{id}',[DoctorController::class,'edit'])->name('edit-doctor');
        Route::put('/update/{id}',[DoctorController::class,'update'])->name('update-doctor');
        Route::get('/destroy/{id}',[DoctorController::class,'destroy'])->name('destroy-doctor');
    });
    Route::prefix('patient')->group(function (){
        Route::get('/',[PatientController::class,'index'])->name('index-patient');
        Route::get('/create',[PatientController::class,'create'])->name('create-patient');
        Route::post('/store',[PatientController::class,'store'])->name('store-patient');
        Route::get('/edit/{id}',[PatientController::class,'edit'])->name('edit-patient');
        Route::put('/update/{id}',[PatientController::class,'update'])->name('update-patient');
        Route::get('/destroy/{id}',[PatientController::class,'destroy'])->name('destroy-patient');
    });
    Route::prefix('medicine')->group(function (){
        Route::get('/',[MedicineController::class,'index'])->name('index-medicine');
        Route::get('/create',[MedicineController::class,'create'])->name('create-medicine');
        Route::post('/store',[MedicineController::class,'store'])->name('store-medicine');
        Route::get('/edit/{id}',[MedicineController::class,'edit'])->name('edit-medicine');
        Route::put('/update/{id}',[MedicineController::class,'update'])->name('update-medicine');
        Route::get('/destroy/{id}',[MedicineController::class,'destroy'])->name('destroy-medicine');
    });
    Route::prefix('user')->group(function (){
        Route::get('/',[UserController::class,'index'])->name('index-user');
        Route::get('/create',[UserController::class,'create'])->name('create-user');
        Route::post('/store',[UserController::class,'store'])->name('store-user');
        Route::get('/edit/{id}',[UserController::class,'edit'])->name('edit-user');
        Route::put('/update/{id}',[UserController::class,'update'])->name('update-user');
        Route::get('/destroy/{id}',[UserController::class,'destroy'])->name('destroy-user');
    });
    Route::prefix('practice-schedule')->group(function (){
        Route::get('/',[PracticeScheduleController::class,'index'])->name('index-practice-schedule');
        Route::get('/create',[PracticeScheduleController::class,'create'])->name('create-practice-schedule');
        Route::post('/store',[PracticeScheduleController::class,'store'])->name('store-practice-schedule');
        Route::get('/edit/{id}',[PracticeScheduleController::class,'edit'])->name('edit-practice-schedule');
        Route::put('/update/{id}',[PracticeScheduleController::class,'update'])->name('update-practice-schedule');
        Route::get('/destroy/{id}',[PracticeScheduleController::class,'destroy'])->name('destroy-practice-schedule');
    });
    Route::prefix('medic-record')->group(function (){
        Route::get('/',[MedicRecordController::class,'index'])->name('index-medic-record');
        Route::get('/create',[MedicRecordController::class,'create'])->name('create-medic-record');
        Route::post('/store',[MedicRecordController::class,'store'])->name('store-medic-record');
    });
    Route::prefix('registration')->group(function (){
        Route::get('/',[RegistrationController::class,'index'])->name('index-registration');
    });
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
