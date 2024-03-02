<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DocumentController;
use App\Models\Document;

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
//    return view('dashboard');
// });
Route::get('/',[LoginController::class,'index'])->name('login');
Route::post('/login-proses',[LoginController::class,'login_proses'])->name('login-proses');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/register-proses',[LoginController::class,'register_proses'])->name('register-proses');

Route::group(['prefix' => 'admin','middleware' => ['auth'], 'as' => 'admin.'], function(){
    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
    Route::get('/sitereport',[HomeController::class,'sitereport'])->name('sitereport');
    Route::get('/safetyreport',[HomeController::class,'safetyreport'])->name('safetyreport');
    Route::get('/salesreport',[HomeController::class,'salesreport'])->name('salesreport');    
    Route::get('/quarry',[HomeController::class,'quarry'])->name('quarry');
    Route::get('/gallery',[HomeController::class,'gallery'])->name('gallery');
    Route::get('/user',[HomeController::class,'user'])->name('user');
    Route::get('/create',[HomeController::class,'create'])->name('user.create');
    Route::post('/storeuser',[HomeController::class,'storeuser'])->name('storeuser');
    Route::get('/edituser/{id}',[HomeController::class,'edituser'])->name('edituser');
    Route::put('/updateuser/{id}',[HomeController::class,'updateuser'])->name('updateuser');
    Route::delete('/deleteuser/{id}',[HomeController::class,'deleteuser'])->name('deleteuser');
    Route::get('/document',[DocumentController::class,'document'])->name('document');
    Route::get('/createdocument',[DocumentController::class,'createdocument'])->name('document.create');
});


//Route::get('/login',[LoginController::class,'index'])->name('login');
//Route::post('/login_proses',[LoginController::class,'login_proses'])->name('login_proses');
