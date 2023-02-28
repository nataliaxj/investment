<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
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
})->name('welcome');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/deposit', [DashboardController::class, 'deposit'])->middleware(['auth', 'verified'])->name('deposit');
Route::post('/deposit', [DashboardController::class, 'storeDeposit'])->middleware(['auth', 'verified'])->name('deposit.store');
Route::get('/payment/{id}', [DashboardController::class, 'getPayment'])->middleware(['auth', 'verified'])->name('payment');
Route::post('/payment/{id}', [DashboardController::class, 'updatePayment'])->middleware(['auth', 'verified'])->name('payment.update');
Route::get('invest', [DashboardController::class, 'invest'])->middleware(['auth', 'verified'])->name('invest');
Route::post('invest', [DashboardController::class, 'investStore'])->middleware(['auth', 'verified'])->name('invest.store');
Route::get('/investments', [DashboardController::class, 'investments'])->middleware(['auth', 'verified'])->name('investments');
Route::get('/plans', [DashboardController::class, 'plans'])->middleware(['auth', 'verified'])->name('plans');


Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
