<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomAuthController;

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



// route::post('users',[UserController::class,'GetData']);
// route::view('login',"user");
route::get('/login',[CustomAuthController::class,"Login"]);
route::get('/registration',[CustomAuthController::class,"Registration"]);
route::view('register-user', 'register-user');
route::post('/register-user',[CustomAuthController::class,"registerUser"])->name('register-user');
route::post('/save',[CustomAuthController::class,'save'])->name('save');



