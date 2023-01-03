<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Auth;

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

Route::get("/",[HomeController::class,"index"]);

Route::get("/users",[AdminController::class,"user"]);

Route::get("/deletemaison/{id}",[AdminController::class,"deletemaison"]);


Route::get("/MaisonsMenu",[AdminController::class,"MaisonsMenu"]);


Route::post("/uploadmaison",[AdminController::class,"upload"]);

Route::post("/uploadmaison_interesse",[HomeController::class,"uploadmaison_interesse"]);



Route::get("/createMaisonUser",[HomeController::class,"createMaisonUser"]);




Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);

Route::get("/updateview/{id}",[AdminController::class,"updateview"]);

Route::get("/update/{id}",[AdminController::class,"update"]);

Route::get("/new_house",[AdminController::class,"newhouse"]);

Route::get("/searchuser",[AdminController::class,"searchuser"]);


Route::get("/searchhouse",[AdminController::class,"searchhouse"]);


Route::get("/voircategorie",[HomeController::class,"voircategorie"]);

Route::get("/ForInteresse/{id}",[HomeController::class,"ForInteresse"]);


Route::get("/voirVilla",[HomeController::class,"voirVilla"]);



Route::get("/updatemaison/{id}",[AdminController::class,"updatemaison"]);











Route::get("/redirects",[HomeController::class,"redirects"]);





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
