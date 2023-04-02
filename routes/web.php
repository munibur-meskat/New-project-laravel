<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, "homefunction"])->name("home");

Route::get('/sign-up', [HomeController::class, "addUserForm"])->name("user.insert.form");

Route::post('/sign-up', [HomeController::class, "insertUser"])->name("user.insert");

Route::get('/user/edit/{id}', [HomeController::class, "userEdit"])->name("user.edit");

Route::post('/user/{id}', [HomeController::class, "userUpdate"])->name("user.update");

Route::get('/user/{id}', [HomeController::class, "userView"])->name("user.view");

Route::get('/user/delete/{id}', [HomeController::class, "userDelete"])->name("user.delete");

Route::get('/about', [HomeController::class, "aboutfunction"])->name("about.page");
