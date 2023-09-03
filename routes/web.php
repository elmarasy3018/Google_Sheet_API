<?php

use App\Http\Controllers\SheetController;
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
});

Route::get('/sheet', [SheetController::class, 'get']);

Route::get('/create', [SheetController::class, 'create']);

Route::get('/store', [SheetController::class, 'store']);

Route::get('/delete', [SheetController::class, 'delete']);