<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnd\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\SupervisorController;

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

Route::get('/test',[PostController::class,'index']);

Route::namespace('manager')->group(function(){
    Route::get('/add_bus',[ManagerController::class,'create']);
    Route::post('/add_bus/store',[ManagerController::class,'store'])->name('bus.store');
    Route::get('/show_bus',[ManagerController::class,'index'])->name('bus.index');
    Route::get('/show_bus/edit/{id}',[ManagerController::class,'edit'])->name('bus.edit');
    Route::post('/show_bus/update/{id}',[ManagerController::class,'update'])->name('bus.update');
    Route::get('/show_bus/delete/{id}',[ManagerController::class,'destroy'])->name('bus.destroy');

});
Route::get('/show_supervisor',[SupervisorController::class,'index'])->name('index');
Route::get('/home',[HomeController::class,'index'])->middleware('Login_MW');
