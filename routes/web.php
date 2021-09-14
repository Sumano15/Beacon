<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimController;
use App\Http\Controllers\PesertaController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('tim', TimController::class);
Route::resource('peserta', PesertaController::class);

// Route::get('/register', function () {
//     return view('register.index');
// });

// Route::get('/register-members', function () {
//     return view('register-members.index');
// });

Route::get('/login_tim', function(){
    return view('login.index'); 
});

Route::get('/', function () {
    return view('Front.home');
});

Route::get('/about-us', function () {
    return view('about.index');
});

Route::get('/back',[TimController::class,'index'])->middleware('admin');
Route::get('/confirmed',[TimController::class,'confirmed'])->middleware('admin');

Route::get('/tim/confirm/{tid}', [TimController::class, 'confirm'])->middleware('admin');

Route::post('/tim/coin/min', [TimController::class, 'update_min_coin'])->name('coin.min')->middleware('admin');
Route::post('/tim/coin/plus', [TimController::class, 'update_plus_coin'])->name('coin.plus')->middleware('admin');
Route::get('/confirmationMail/{tid}',[PesertaController::class, 'confirmationMail'])->name('confirmationMail')->middleware('admin');