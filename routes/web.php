<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Member\CategoriController;
use App\Http\Controllers\Member\RegisterController;
use App\Http\Controllers\Member\LoginController as MemberLoginController;
use App\Http\Controllers\Member\DashboardController;
use App\Http\Controllers\Member\MovieController as MemberMovieController;
use App\Http\Controllers\Member\PricingController;
use App\Http\Controllers\Member\ProfileController;
use App\Http\Controllers\Member\TransactionController as MemberTransactionController;
use App\Http\Controllers\Member\UserPremiumController;

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

Route::get('admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('admin/login', [LoginController::class, 'authenticate'])->name('admin.login.auth');

Route::group(['prefix' => 'admin', 'middleware' => ['admin.auth']], function() {
    Route::view('/', 'admin.dashboard')->name('admin.dashboard');

    Route::get('logout', [LoginController::class,'logout'])->name('admin.logout');

    Route::get('transaction', [TransactionController::class, 'index'])->name('admin.transaction');

    Route::group(['prefix' => 'movie'], function() {
        Route::get('/', [MovieController::class, 'index'])->name('admin.movie');
        Route::get('/create', [MovieController::class, 'create'])->name('admin.movie.create');
        Route::post('/store', [MovieController::class, 'store']) -> name('admin.movie.store');
        Route::get('/edit/{id}', [MovieController::class, 'edit'])->name('admin.movie.edit');
        Route::put('/update/{id}', [MovieController::class, 'update'])->name('admin.movie.update');
        Route::delete('/destroy/{id}', [MovieController::class, 'destroy'])->name('admin.movie.destroy');
    });
    
    Route::group(['prefix'=>'package'], function() {
        Route::get('/', [PackageController::class, 'index'])->name('admin.package');
        Route::get('/create', [PackageController::class, 'create'])->name('admin.package.create');
        Route::post('/store', [PackageController::class, 'store'])->name('admin.package.store');
        Route::get('/edit/{id}', [PackageController::class, 'edit'])->name('admin.package.edit');
        Route::put('/update/{id}', [PackageController::class, 'update'])->name('admin.package.update');
        Route::delete('/destroy/{id}', [PackageController::class, 'destroy'])->name('admin.package.destroy');
    });
});

Route::view('/', 'index');

Route::get('/register', [RegisterController::class, 'index'])->name('member.register');
Route::post('/register', [RegisterController::class, 'store'])->name('member.register.store');

Route::get('/login', [MemberLoginController::class, 'index'])->name('member.login');
Route::post('/login', [MemberLoginController::class, 'auth'])->name('member.login.auth');

Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');


Route::view('/payment-finish', 'member.payment-finish')->name('member.payment.finish');

Route::group(['prefix' => 'member', 'middleware' => ['auth']], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('member.dashboard');
    Route::get('/logout', [MemberLoginController::class, 'logout'])->name('member.logout');
    
    Route::group(['prefix' => 'categories'], function(){
        Route::get('/', [CategoriController::class, 'index'])->name('member.categories');
        Route::get('/action', [CategoriController::class, 'action'])->name('member.categories.action');
        Route::get('/horror', [CategoriController::class, 'horror'])->name('member.categories.horror');
        Route::get('/anime', [CategoriController::class, 'anime'])->name('member.categories.anime');
        Route::get('/survival', [CategoriController::class, 'survival'])->name('member.categories.survival');
        
    });
    Route::group(['prefix' => 'profile'], function() {
        Route::get('/', [ProfileController::class, 'index'])->name('member.profile');
        Route::get('/edit/{id}', [ProfileController::class, 'edit'])->name('member.profile.edit');
        Route::put('/update/{id}', [ProfileController::class, 'update'])->name('member.profile.update');
    });
    
    Route::post('transaction', [MemberTransactionController::class, 'store'])->name('member.transaction.store');

    Route::get('subscription', [UserPremiumController::class, 'index'])->name('member.user_premium.index');
    Route::delete('subscription/{id}', [UserPremiumController::class, 'destroy'])->name('member.user_premium.destroy');

    Route::get('movie/{id}', [MemberMovieController::class, 'show'])->name('member.movie.detail');
    Route::get('movie/{id}/watch', [MemberMovieController::class, 'watch'])->name('member.movie.watch');

});
// Route::get('/', function () {
//     return view('welcome');
// });
