<?php

use Illuminate\Support\Facades\Route;

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
})->middleware(['verify.shopify'])->name('home');


Route::group(['middleware' => ['verify.shopify']], function () {
    Route::group(['prefix' => 'qa'], function () {
        Route::get('/create', [\App\Http\Controllers\QAController::class, 'create'])->name('qa.create');
    });
});

Route::get('/mail', function () {
     \Illuminate\Support\Facades\Mail::to('pritomshajed@gmail.com')->send(new \App\Mail\TestMail());
     return ['status' => 'sent'];
});
