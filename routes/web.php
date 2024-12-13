<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IconController;

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

Route::get('/dashboard', [IconController::class, 'index']);
Route::get('/icon/create',[IconController::class, 'create']);
Route::get('/icon/{icon_id}', [IconController::class, 'show']);

//登録用のルート設定の書き方の基本
Route::post('/icon/store', [IconController::class, 'store']);