<?php

use Illuminate\Support\Facades\Route;
use app\http\Controllers\FrontEnd\HomeController;
use app\http\Controllers\FrontEnd\RegistrationController;
use app\http\Controllers\FrontEnd\DiseaseController;
use app\http\Controllers\FrontEnd\RationController;
use app\http\Controllers\FrontEnd\TokenController;
use app\http\Controllers\FrontEnd\token_generateController;
use App\Http\Controllers\AuthController;
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
//     return view('welcome');
// });


//Route::get('/',[HomeController::class, 'index']);
Route::get('/', function () {
    return view('FrontEnd.Home');
})->name('home');

Route::get('/Registration', function () {
    return view('FrontEnd.Registration');
})->name('registration_page');


Route::get('/Disease', function () {
    return view('FrontEnd.Disease');
})->name('disease');


Route::get('/Ration', function () {
    return view('FrontEnd.Ration');
})->name('ration');

Route::get('/Token',function()
{
 return view('FrontEnd.Token');
})->name('token');


Route::get('/token_generate',function()
{
 return view('FrontEnd.token_generate');
})->name('token_generate');

// Route::get('/alert_box', function () {
//     return view('FrontEnd.alert_box');
// });
Route::get( '/login',[AuthController::class,'index'])->name('login_page');
Route::post( '/login',[AuthController::class,'login'])->name('login');
Route::get( '/logout',[AuthController::class,'logout'])->name('logout');
Route::post( '/Registration',[AuthController::class, 'Registration'])->name('Registration');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
