<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\VendorAuthController;
use App\Http\Controllers\AdminAuthController;

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

Route::get('user/', [UserAuthController::class, 'index'])->name('user.home')->middleware("auth:web");
Route::get('user/login', [UserAuthController::class, 'login'])->name('user.login');
Route::get('user/logout', [UserAuthController::class, 'logout'])->name('user.logout');
Route::post('user/login', [UserAuthController::class, 'handleLogin'])->name('user.handleLogin');
    
Route::get('vendor/', [VendorAuthController::class, 'index'])->name('vendor.home')->middleware('auth:webvendor');
Route::get('vendor/login', [VendorAuthController::class, 'login'])->name('vendor.login');
Route::post('vendor/login', [VendorAuthController::class, 'handleLogin'])->name('vendor.handleLogin');
Route::get('vendor/logout', [VendorAuthController::class, 'index'])->name('vendor.logout');   


Route::get('admin/', [AdminAuthController::class, 'index'])->name('admin.home')->middleware('auth:webadmin');  
Route::get('admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'handleLogin'])->name('admin.handleLogin');
Route::get('admin/logout', [AdminAuthController::class, 'index'])->name('admin.logout');






  
