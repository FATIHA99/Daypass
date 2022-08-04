<?php

use App\Http\Controllers\DaypassController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DaypassController::class, 'index'])->name('dashboard');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/reservation', function () {
        return view('reservation');
    })->name('reservation');
});


Route::get('/daypass/{slug}', [DaypassController::class, 'show'])->name('daypass.show');
Route::get('/create/daypass', [DaypassController::class, 'create'])->name('daypass.create');
Route::post('/add/daypass', [DaypassController::class, 'store'])->name('daypass.store');
Route::delete('/delete/daypass/{slug}', [DaypassController::class, 'delete'])->name('daypass.delete');

Route::get('/edit/daypass/{slug}', [DaypassController::class, 'edit'])->name('daypass.edit');
Route::put('/update/daypass/{slug}', [DaypassController::class, 'update'])->name('daypass.update');

Route::get('/reserverForm/daypass/{slug}', [DaypassController::class, 'reserver'])->name('daypass.reserver');



