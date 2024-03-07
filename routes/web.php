<?php

use App\Http\Controllers\DailysiteController;
use App\Http\Controllers\DailysafetyController;
use App\Http\Controllers\DataTableController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\WeeklysiteController;
use App\Http\Controllers\WeeklysafetyController;
use App\Http\Controllers\SalesreportController;
use App\Http\Controllers\ShareholderController;

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
    Route::post('/storedocument',[DocumentController::class,'storedocument'])->name('storedocument');
    Route::get('/editdocument/{id}',[DocumentController::class,'editdocument'])->name('editdocument');
    Route::put('/updatedocument/{id}',[DocumentController::class,'updatedocument'])->name('updatedocument');
    Route::delete('/deletedocument/{id}',[DocumentController::class,'deletedocument'])->name('deletedocument');
    Route::get('showdocument/{id}',[DocumentController::class,'showdocument'])->name('showdocument');

    Route::get('/dailysite',[DailysiteController::class,'dailysite'])->name('dailysite');
    Route::get('/dailysitecreate',[DailysiteController::class,'dailysitecreate'])->name('dailysitecreate');
    Route::post('/dailysitestore',[DailysiteController::class,'dailysitestore'])->name('dailysitestore');
    Route::delete('/dailysitedelete/{id}',[DailysiteController::class,'dailysitedelete'])->name('dailysitedelete');

    Route::get('/weeklysite',[WeeklysiteController::class,'weeklysite'])->name('weeklysite');
    Route::get('/weeklysitecreate',[WeeklysiteController::class,'weeklysitecreate'])->name('weeklysitecreate');
    Route::post('/weeklysitestore',[WeeklysiteController::class,'weeklysitestore'])->name('weeklysitestore');
    Route::delete('/weeklysitedelete/{id}',[WeeklysiteController::class,'weeklysitedelete'])->name('weeklysitedelete');

    Route::get('/dailysafety',[DailysafetyController::class,'dailysafety'])->name('dailysafety');
    Route::get('/dailysafetycreate',[DailysafetyController::class,'dailysafetycreate'])->name('dailysafetycreate');
    Route::post('/dailysafetystore',[DailysafetyController::class,'dailysafetystore'])->name('dailysafetystore');
    Route::delete('/dailysafetydelete/{id}',[DailysafetyController::class,'dailysafetydelete'])->name('dailysafetydelete');

    Route::get('/weeklysafety',[WeeklysafetyController::class,'weeklysafety'])->name('weeklysafety');
    Route::get('/weeklysafetycreate',[WeeklysafetyController::class,'weeklysafetycreate'])->name('weeklysafetycreate');
    Route::post('/weeklysafetystore',[WeeklysafetyController::class,'weeklysafetystore'])->name('weeklysafetystore');
    Route::delete('/weeklysafetydelete/{id}',[WeeklysafetyController::class,'weeklysafetydelete'])->name('weeklysafetydelete');

    Route::get('/salesreport',[SalesreportController::class,'salesreport'])->name('salesreport');
    Route::get('/salesreportcreate',[SalesreportController::class,'salesreportcreate'])->name('salesreportcreate');
    Route::post('/salesreportstore',[SalesreportController::class,'salesreportstore'])->name('salesreportstore');
    Route::delete('/salesreportdelete/{id}',[SalesreportController::class,'salesreportdelete'])->name('salesreportdelete');

    Route::get('/shareholder',[ShareholderController::class,'shareholder'])->name('shareholder');
    Route::get('/shareholdercreate',[ShareholderController::class,'shareholdercreate'])->name('shareholdercreate');
    Route::post('/shareholderstore',[ShareholderController::class,'shareholderstore'])->name('shareholderstore');
    Route::delete('/shareholderdelete/{id}',[ShareholderController::class,'shareholderdelete'])->name('shareholderdelete');

    
});

