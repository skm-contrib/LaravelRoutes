<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabPagesController;
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
    return view('home');
});
Route::get('/about', [LabPagesController::class, 'about']);
Route::get('/blog', [LabPagesController::class, 'blog']);
Route::get('/faq', [LabPagesController::class, 'faq']);