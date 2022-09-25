<?php

use App\Http\Controllers\FrontendController;
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

// HOME PAGE ROUTE
Route::get('/', [FrontendController::class, 'index'])->name('front.home');

// ABOUT US ROUTES
Route::group(['prefix' => 'about-us'], function () {
    Route::get('/ceo-message', [FrontendController::class, 'ceoMessage'])->name('aboutUs.ceoMessage');
    Route::get('/company-profile', [FrontendController::class, 'companyProfile'])->name('aboutUs.companyProfile');
});

Route::get('contact-us', [FrontendController::class, 'conatactUs'])->name('front.contact_us');
Route::get('gallery', [FrontendController::class, 'gallery'])->name('front.gallery');

// OUR SERVICES ROUTES
//Route::group(['prefix' => 'our-services'], function () {
//    Route::get('/ceo-message', [FrontendController::class, 'ceoMessage'])->name('aboutUs.ceoMessage');
//    Route::get('/company-profile', [FrontendController::class, 'home'])->name('aboutUs.companyProfile');
//});
