<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepagController;
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

// Route::get('/', function () {
//     return view('frontend.home');
// });

Route::get('/',[HomepagController::class,'index']);
Route::post('/student/info/save',[HomepagController::class,'save'])->name('student.store');
Route::get('/student/your/data',[HomepagController::class,'showYourInfo'])->name('show');
Route::get('/student/info/edit/{id}',[HomepagController::class,'infoEdit'])->name('edit');
Route::post('/student/info/update',[HomepagController::class,'update'])->name('student.update');
Route::get('/student/info/delete/{id}',[HomepagController::class,'delete'])->name('delete');


Route::get('about', function () {
    return view('frontend.about');
});
Route::get('contact', function () {
    return view('frontend.contact');
});
