<?php

use App\HTTP\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::prefix('/auth')->group(function (){
Route::get('/login', [AuthController::class, "getLogin" ])->name("login");
Route::post('/login', [AuthController::class, "postLogin" ])->name("post.login");
Route::get('/register', [AuthController::class, "getRegister" ])->name("register");
Route::post('/register', [AuthController::class, "postRegister" ])->name("post.register");
Route::get('/logout', [AuthController::class, "getLogout" ])->name("logout");

});

Route::get('/', [AuthController::class,"index"])->name("home");
Route::get('/app/home', [HomeController::class,"index"])->name("adminView");

Route::middleware('auth')->group(function () {

    Route::prefix('/notes')->group(function (){
        Route::get('/add', [NoteController::class, "getAddNote"])->name("note.add");
        Route::post('/add', [NoteController::class, "postAddNote"])->name("post.note.add");

    });
});

