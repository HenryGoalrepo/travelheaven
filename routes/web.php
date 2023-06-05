<?php

use App\Http\Controllers\Travel\AppArtisanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Travel\TravelController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('clear',[AppArtisanController::class,'initiate']);

Route::group(['prefix'=>'travelheaven','as'=>'travelheaven.'],function(){
     Route::get('home',[TravelController::class,'home'])->name('home');
     Route::get('destinations',[TravelController::class,'destination'])->name('destinations');
     Route::get('gallery',[TravelController::class,'gallery'])->name('gallery');
     Route::get('tour',[TravelController::class,'tour'])->name('tour');
     Route::get('about',[TravelController::class,'about'])->name('about');
     Route::get('blog',[TravelController::class,'blogless'])->name('blog');
     Route::get('contact',[TravelController::class,'contact'])->name('contact');
});
