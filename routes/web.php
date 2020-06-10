<?php


use App\Edge\Controllers\SiteController;
use App\User\Controllers\ContentController;
use App\User\Controllers\ProfileController;
use App\User\Controllers\LoginController;
use App\User\Controllers\RegisterController;
use App\User\Controllers\UserSitesController;
use Illuminate\Support\Facades\Route;


Route::domain('{site}.upsite.test')->group(function () {
    Route::get('/', [SiteController::class, 'show']);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [LoginController::class, 'show']);
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);
Route::get('register', [RegisterController::class, 'show']);
Route::post('register', [RegisterController::class, 'register']);


Route::middleware('auth')->prefix('profile')->group(function () {
    Route::get('/', [ProfileController::class, 'index']);

    Route::get('sites', [UserSitesController::class, 'index']);
    Route::get('sites/new', [UserSitesController::class, 'create']);
    Route::post('sites', [UserSitesController::class, 'store']);
    Route::get('sites/{site}', [UserSitesController::class, 'show']);
    Route::get('sites/{site}/edit', [UserSitesController::class, 'edit']);
    Route::post('sites/{site}/edit', [UserSitesController::class, 'update']);
    Route::get('sites/{site}/delete', [UserSitesController::class, 'delete']);
    Route::delete('sites/{site}/delete', [UserSitesController::class, 'destroy']);

    Route::post('content', [ContentController::class, 'store']);
});
