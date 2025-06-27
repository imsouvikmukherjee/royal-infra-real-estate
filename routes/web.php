<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\FrontController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/',[FrontController::class,'index'])->name('user_home');
Route::get('/properties-category',[FrontController::class,'propertiesCategory'])->name('properties_category');
Route::get('/properties/{id}',[FrontController::class,'property'])->name('property');
Route::get('/property-details/{id}',[FrontController::class,'propertyDetails'])->name('property_details');
Route::get('/property-enquery/{id}',[FrontController::class,'propertyEnquery'])->name('property_enquery');
Route::post('/property-enquery-store/{id}',[FrontController::class,'enqueryStore'])->name('enquery_store');
Route::get('/about-us',[FrontController::class,'aboutUs'])->name('about_us');
Route::get('/contact-us',[FrontController::class,'contactUs'])->name('contact_us');
Route::post('/contact-message-store',[FrontController::class,'messageStore'])->name('contact_message_store');
Route::get('/partner-payment',[FrontController::class,'partnerPayment'])->name('partner_payment');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::get('/admin/dashboard',[AdminController::class,'adminDashboard'])->name('admin_dashboard');

    Route::get('/admin/properties',[AdminController::class,'properties'])->name('admin_properties');
    Route::get('/admin/add-properties',[AdminController::class,'addProperties'])->name('admin_add_properties');
    Route::post('/admin/add-property-store',[AdminController::class,'addPropertyStore'])->name('add_property_store');
    Route::get('/admin/property-delete/{id}',[AdminController::class,'propertyDelete']);
    Route::get('/admin/property-update/{id}',[AdminController::class,'propertyUpdate'])->name('property_update');
    Route::post('/admin/property-update-store/{id}',[AdminController::class,'propertyUpdateStore'])->name('property_update_Store');

    Route::get('/admin/users',[AdminController::class,'adminUsers'])->name('admin_users');
    Route::get('/admin/user-delete/{id}',[AdminController::class,'userDelete']);
    Route::get('/admin/login-status/{id}',[AdminController::class,'loginStatus']);

    Route::get('/admin/investment-benifits',[AdminController::class,'investment'])->name('investment');
    Route::post('/admin/investment-benifits-update/{id}',[AdminController::class,'investmentBenifitsUpdate']);

    Route::get('/admin/property-enquery',[AdminController::class,'propertyEnquery'])->name('property_enquery');
    Route::get('/admin/enquery-delete/{id}',[AdminController::class,'enqueryDelete']);
    Route::get('/admin/contact-messages',[AdminController::class,'contactMessage'])->name('contact_messages');
    Route::get('/admin/contact-message-delete/{id}',[AdminController::class,'messageDelete']);
    Route::get('/admin/withdraw',[AdminController::class,'withdraw'])->name('withdraw');
    Route::post('/admin/withdraw-store',[AdminController::class,'withdrawStore'])->name('withdraw_store');

    Route::get('/admin/add-profit/{id}',[AdminController::class,'addProfit'])->name('add_profit');
    Route::post('/admin/add-profit-store/{id}',[AdminController::class,'addProfitStore']);
    Route::get('/admin/profit-history',[AdminController::class,'profitHistory'])->name('profit_history');

    Route::get('/admin/scheduled-payments',[AdminController::class,'scheduledPayments'])->name('scheduled_payments');
    Route::get('/admin/make-schedule-payment/{userid}/{paymentid}',[AdminController::class,'makeSchedulePayment']);

    Route::get('/admin/withdraw-request',[AdminController::class,'withdrawRequest'])->name('withdraw_request');
    Route::get('/admin/withdraw-history',[AdminController::class,'withdrawHistory'])->name('withdraw_history');
    Route::get('/admin/approve-withdraw/{id}',[AdminController::class,'approveWithdraw']);
    Route::get('/admin/reject-withdraw/{id}',[AdminController::class,'rejectWithdraw']);
});

require __DIR__.'/auth.php';
