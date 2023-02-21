<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\VendorAuthController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\VehicleMakeController;
use App\Http\Controllers\VehicleFeatureController;
use App\Http\Controllers\VehicleExperienceController;
use App\Http\Controllers\VehicleModelController;
use App\Http\Controllers\VehicleCategoryController;
use App\Http\Controllers\VehicleTypeController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\TripController;
use App\Models\VehicleMake;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



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
    $s = VehicleMake::all();
    return view('frontend.welcome',compact('s'));
});
Route::get('/single', function () {
    return view('frontend.single');
});

Route::get('/ajax-subcat',function (Request $request) {
    $cat_id = $request->cat_id;
    $subcategories = DB::table('vehicle_models')->where('id', '=',$cat_id)->get();
    return Response::json($subcategories);
});

Route::get('user/', [UserAuthController::class, 'index'])->name('user.home')->middleware("auth:web");
Route::get('user/login', [UserAuthController::class, 'login'])->name('user.login');
Route::get('user/register', [UserAuthController::class, 'register'])->name('user.register');
Route::post('user/register', [UserAuthController::class, 'create'])->name('user.create');
Route::get('user/logout', [UserAuthController::class, 'logout'])->name('user.logout');
Route::post('user/login', [UserAuthController::class, 'handleLogin'])->name('user.handleLogin');

Route::middleware(['auth:web'])->group(function () {
    Route::resource('user/trip', TripController::class);
});





Route::get('vendors/', [VendorAuthController::class, 'index'])->name('vendor.home')->middleware('auth:webvendor');
Route::get('vendors/login', [VendorAuthController::class, 'login'])->name('vendor.login');
Route::get('vendors/register', [VendorAuthController::class, 'register'])->name('vendor.register');
Route::post('vendors/register', [VendorAuthController::class, 'create'])->name('vendor.create');
Route::get('vendors/logout', [VendorAuthController::class, 'logout'])->name('vendor.logout');
Route::post('vendors/login', [VendorAuthController::class, 'handleLogin'])->name('vendor.handleLogin');

Route::middleware(['auth:webvendor'])->group(function () {
    Route::resource('vendors/listing', VehicleController::class);
});   




Route::get('admin/', [AdminAuthController::class, 'index'])->name('admin.home')->middleware('auth:webadmin');  
Route::get('admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'handleLogin'])->name('admin.handleLogin');
Route::get('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth:webadmin'])->group(function () {

Route::resource('admin/all_customer', CustomerController::class);
Route::resource('admin/all_vendor', VendorController::class);

Route::resource('admin/make', VehicleMakeController::class);
Route::resource('admin/model', VehicleModelController::class);
Route::resource('admin/type', VehicleTypeController::class);
Route::resource('admin/experince', VehicleExperienceController::class);
Route::resource('admin/category', VehicleCategoryController::class);
Route::resource('admin/feature', VehicleFeatureController::class);
Route::resource('admin/vehicle', VehicleController::class);
});







  
