<?php

use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\ContactController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [CompanyProfileController:: class, 'index']);

Route::prefix('category')->group(function(){
    Route::get('/marbel-edu-games', [CompanyProfileController::class, 'cat1']);
    Route::get('/marbel-and-friends-kids-games', [CompanyProfileController::class, 'cat2']);
    Route::get('/riri-story-books', [CompanyProfileController::class, 'cat3']);
    Route::get('/kolak-kids-songs', [CompanyProfileController::class, 'cat4']);
});

Route::get('/news/{param?}', [CompanyProfileController::class, 'news1']);
Route::get('/educa-studio-berbagi/{param?}', [CompanyProfileController::class, 'news2']);

Route::prefix('program')->group(function(){
    Route::get('/karir', [CompanyProfileController::class, 'program1']);
    Route::get('/magang', [CompanyProfileController::class, 'program2']);
    Route::get('/kunjungan-industri', [CompanyProfileController::class, 'program3']);
});

Route::get('/about-us', [CompanyProfileController:: class, 'aboutUs']);

Route::resource('/contact', ContactController::class)->only(['index']);