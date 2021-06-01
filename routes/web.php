<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TicketingController;

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

Route::get('/receipt', function () {
    return view('receipt');
});

Auth::routes();

Route::get('/', [TicketingController::class, 'welcome']);
Route::get('/deleteRoute/{id}', [TicketingController::class, 'deleteRoute']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/getCode', [TicketingController::class, 'getCode']);
Route::post('/newRoute', [TicketingController::class, 'newRoute']);
Route::post('/updateRoute', [TicketingController::class, 'updateRoute']);
Route::post('/getReceipt', [TicketingController::class, 'getReceipt']);
