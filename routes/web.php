<?php

use App\Http\Controllers\PayPalController;
use Illuminate\Support\Facades\Auth;
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
Route::get('go-payment', [PayPalController::class, 'goPayment'])->name('payment.go');
Route::get('payment',[PayPalController::class, 'payment'])->name('payment');
Route::get('cancel',[PayPalController::class, 'cancel'])->name('payment.cancel');
Route::get('payment/success', [PayPalController::class, 'success'])->name('payment.success');
Route::get('logout',function(){
    Auth::logout();

});