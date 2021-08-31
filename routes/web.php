<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportController;
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

Route::get('/home',[HomeController::class,'index'])->name('home');

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::get('/report',[ReportController::class,'index'])->name('report');

Route::prefix('/report')->group(function () {
    Route::get('',[ReportController::class,'index'])->name('report');
    Route::get('/vtreport',[ReportController::class,'vtreport']);
    Route::get('/streport',[ReportController::class,'streport']);
    Route::get('/swcard',[ReportController::class,'swcard']);
    Route::get('/remind',[ReportController::class,'remind']);
    Route::get('/conclude',[ReportController::class,'conclude']);
    Route::get('/oilspgraph',[ReportController::class,'oilspgraph']);
});




