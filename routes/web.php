<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;



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
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login-proses',[LoginController::class,'login_proses'])->name('login-proses');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/register-proses',[LoginController::class,'register_proses'])->name('register-proses');

Route::group(['prefix' => 'admin','middleware' => ['auth'], 'as' => 'admin.'], function(){
    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
    Route::get('/exsum',[HomeController::class,'exsum'])->name('exsum');
    Route::get('/tenement',[HomeController::class,'tenement'])->name('tenement');
    Route::get('/shareholder',[HomeController::class,'shareholder'])->name('shareholder');
    Route::get('/mre',[HomeController::class,'mre'])->name('mre');
    Route::get('/sitereport',[HomeController::class,'sitereport'])->name('sitereport');
    Route::get('/safetyreport',[HomeController::class,'safetyreport'])->name('safetyreport');
    Route::get('/salesreport',[HomeController::class,'salesreport'])->name('salesreport');    
    Route::get('/quarry',[HomeController::class,'quarry'])->name('quarry');
    Route::get('/gallery',[HomeController::class,'gallery'])->name('gallery');
    Route::get('/calendar',[HomeController::class,'calendar'])->name('calendar');

    Route::get('/user',[HomeController::class,'user'])->name('user');
});


//Route::get('/login',[LoginController::class,'index'])->name('login');
//Route::post('/login_proses',[LoginController::class,'login_proses'])->name('login_proses');
