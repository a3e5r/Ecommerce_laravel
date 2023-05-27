<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\EmployeeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
'/' الرابط الرئيسي

Route::get('/phone', function () {
    dd("Welcome To Tuwiaq");
});
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route::get('/phone', function () {

//     $ar=[
//         's1'=> 'saad',
//         's2'=> 'Mohammed',
//         's3'=> 'Gamal'
//     ];

//     return view('phone',['sn'=> $ar]);
// }) -> name('phone'); 

Route::get('/nokia', function () {
    return view('nokia.nokia');
})-> name('nokia');

// Route::get('/invoice', function () {
//     return view('invoice');
// })-> name('invoice');

Route::get('/A1',[PhoneController::class,'A1'])->name('A1');
Route::get('/A2',[PhoneController::class,'A2'])->name('A2');

Route::get('/getempid',[EmployeeController::class,'GetEmpId'])->name('GetEmpId');

Route::get('/phonetype', [PhoneController::class, 'PhoneType']) ->name('phoneType');
Route::get('/phone',[PhoneController::class,'PhoneType'])->name('phone');

Route::get('/checkout/{id}', [PhoneController::class, 'checkout']) ->name('checkout');

Route::post('/invoice',[PhoneController::class,'invoice'])->name('invoice');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

