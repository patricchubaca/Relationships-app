<?php

use App\Http\Controllers\OneToOneController;
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
Route::get('one-to-one', [OneToOneController::class, 'oneToOne']);

Route::get('/', function () {
    return view('welcome');
});
