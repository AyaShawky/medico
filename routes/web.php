<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
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






Route::post('/send',[HomeController::class,'send']);

Route::get('/home', [HomeController::class, 'index']);
Route::resource('/about','AboutController');
Route::resource('/service', 'ServiceController');
Route::resource('/department', 'DepartmentController');
Route::resource('/doctor', 'DoctorController');
Route::resource('/testmonils', TestmonilsController::class);
Route::resource('/feature', FeaturesController::class);
Route::resource('/gallery', GalleryController::class);
Route::resource('/price', PriceController::class);
Route::resource('/introduction', IntroductionController::class);
Route::resource('/contact', ContactController::class);

Route::get('/admin', [HomeController::class, 'show']);
Auth::routes();



