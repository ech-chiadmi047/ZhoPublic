<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PreferenceController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\EntertainmentController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\CateringController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\PlaceImageController;
use App\Http\Controllers\CompanyImageController;
use App\Http\Controllers\EntertainmentImageController;
use App\Http\Controllers\SuggestionImageController;
use App\Http\Controllers\CateringImageController;
use App\Http\Controllers\EquipmentImageController;
use App\Http\Controllers\PlaceCommentController;
use App\Http\Controllers\CompanyCommentController;
use App\Http\Controllers\EntertainmentCommentController;
use App\Http\Controllers\SuggestionCommentController;
use App\Http\Controllers\CateringCommentController;
use App\Http\Controllers\EquipmentCommentController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\VerificationController;
use App\Models\Notification;
use App\Http\Controllers\NotificationController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/doyouwantto', function () {
    return view('home-auth.after-register');
});
Route::get('/verify', function () {
    return view('profile.verify');
});

Auth::routes(['verify' => true]);

// HOME PAGE

Route::get('/', [App\Http\Controllers\HomePage::class, 'home'])->name('hoome');
Route::get('/catering', [App\Http\Controllers\HomePage::class, 'catering'])->name('catering');
Route::get('/entertainment', [App\Http\Controllers\HomePage::class, 'entertainment'])->name('entertainment');
Route::get('/company', [App\Http\Controllers\HomePage::class, 'company'])->name('company');
Route::get('/place', [App\Http\Controllers\HomePage::class, 'place'])->name('place');
Route::get('/suggestion', [App\Http\Controllers\HomePage::class, 'suggestion'])->name('suggestion');
Route::get('/equipment', [App\Http\Controllers\HomePage::class, 'equipment'])->name('equipment');
Route::get('/aboutus', [App\Http\Controllers\HomePage::class, 'aboutus'])->name('aboutus');

// PROFILE

Route::resource('profile', FormController::class);

// PREFERENCE

Route::resource('preference', PreferenceController::class);

// WISHLIST

Route::post('favorite-addCompany/{id}', [WishlistController::class, 'favoriteAddCompany'])->name('favorite.company');
Route::post('favorite-addPlace/{id}', [WishlistController::class, 'favoriteAddPlace'])->name('favorite.place');
Route::post('favorite-addSuggestion/{id}', [WishlistController::class, 'favoriteAddSuggestion'])->name('favorite.suggestion');
Route::post('favorite-addCatering/{id}', [WishlistController::class, 'favoriteAddCatering'])->name('favorite.catering');
Route::post('favorite-addEntertainment/{id}', [WishlistController::class, 'favoriteAddEntertainment'])->name('favorite.entertainment');
Route::post('favorite-addEquipment/{id}', [WishlistController::class, 'favoriteAddEquipment'])->name('favorite.equipment');

Route::delete('favorite-removeCompany/{id}', [WishlistController::class, 'favoriteremoveCompany'])->name('remove.company');
Route::delete('favorite-removePlace/{id}', [WishlistController::class, 'favoriteremovePlace'])->name('remove.place');
Route::delete('favorite-removeSuggestion/{id}', [WishlistController::class, 'favoriteremoveSuggestion'])->name('remove.suggestion');
Route::delete('favorite-removeCatering/{id}', [WishlistController::class, 'favoriteremoveCatering'])->name('remove.catering');
Route::delete('favorite-removeEntertainment/{id}', [WishlistController::class, 'favoriteremoveEntertainment'])->name('remove.entertainment');
Route::delete('favorite-removeEquipment/{id}', [WishlistController::class, 'favoriteremoveEquipment'])->name('remove.equipment');




// BACKOFFICE

// FINDER 

Route::get('/ALL', [App\Http\Controllers\HomeAuthController::class, 'all'])->name('ALL');
Route::get('/CATERING', [App\Http\Controllers\HomeAuthController::class, 'catering'])->name('CATERING');
Route::get('/ENTERTAINMENT', [App\Http\Controllers\HomeAuthController::class, 'entertainment'])->name('ENTERTAINMENT');
Route::get('/COMPANY', [App\Http\Controllers\HomeAuthController::class, 'company'])->name('COMPANY');
Route::get('/PLACE', [App\Http\Controllers\HomeAuthController::class, 'place'])->name('PLACE');
Route::get('/SUGGESTION', [App\Http\Controllers\HomeAuthController::class, 'suggestion'])->name('SUGGESTION');
Route::get('/EQUIPMENT', [App\Http\Controllers\HomeAuthController::class, 'equipment'])->name('EQUIPMENT');
Route::get('/post', [App\Http\Controllers\HomeAuthController::class, 'post'])->name('post');
Route::get('/hurray', [App\Http\Controllers\HomeAuthController::class, 'hurray'])->name('hurray');
Route::get('/search', [App\Http\Controllers\HomeAuthController::class, 'search'])->name('search');
Route::get('/filter', [App\Http\Controllers\HomeAuthController::class, 'filter'])->name('filter');


// SUPPLIER 

Route::get('/ALL/SUPPLIER', [App\Http\Controllers\HomeAuthControllerSupplier::class, 'all'])->name('ALL-SUPPLIER');
Route::get('/CATERING/SUPPLIER', [App\Http\Controllers\HomeAuthControllerSupplier::class, 'catering'])->name('CATERING-SUPPLIER');
Route::get('/ENTERTAINMENT/SUPPLIER', [App\Http\Controllers\HomeAuthControllerSupplier::class, 'entertainment'])->name('ENTERTAINMENT-SUPPLIER');
Route::get('/COMPANY/SUPPLIER', [App\Http\Controllers\HomeAuthControllerSupplier::class, 'company'])->name('COMPANY-SUPPLIER');
Route::get('/PLACE/SUPPLIER', [App\Http\Controllers\HomeAuthControllerSupplier::class, 'place'])->name('PLACE-SUPPLIER');
Route::get('/SUGGESTION/SUPPLIER', [App\Http\Controllers\HomeAuthControllerSupplier::class, 'suggestion'])->name('SUGGESTION-SUPPLIER');
Route::get('/EQUIPMENT/SUPPLIER', [App\Http\Controllers\HomeAuthControllerSupplier::class, 'equipment'])->name('EQUIPMENT-SUPPLIER');
Route::get('/post/SUPPLIER', [App\Http\Controllers\HomeAuthControllerSupplier::class, 'post'])->name('post-SUPPLIER');
Route::get('/hurray/SUPPLIER', [App\Http\Controllers\HomeAuthControllerSupplier::class, 'hurray'])->name('hurray-SUPPLIER');

// DASHBOARD 

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard/all_messages', [App\Http\Controllers\DashboardController::class, 'all_messages'])->name('all_messages');
Route::get('/dashboard/all_posts', [App\Http\Controllers\DashboardController::class, 'all_posts'])->name('all_posts');
Route::get('/dashboard/my_messages', [App\Http\Controllers\DashboardController::class, 'my_messages'])->name('my_messages');
Route::get('/dashboard/my_posts', [App\Http\Controllers\DashboardController::class, 'posts'])->name('my_posts');
Route::get('/dashboard/my_profile', [App\Http\Controllers\DashboardController::class, 'profile'])->name('my_profile');
Route::get('/dashboard/my_wishlist', [App\Http\Controllers\DashboardController::class, 'wishlist'])->name('my_wishlist');
Route::get('/dashboard/verifications', [App\Http\Controllers\DashboardController::class, 'verification'])->name('admin_verification');
Route::get('/dashboard/contactus', [App\Http\Controllers\DashboardController::class, 'contactus'])->name('contactus');


// COMPANY

Route::resource('zho-company', CompanyController::class);

// PLACE

Route::resource('zho-place', PlaceController::class);

// ENTERTAINMENT

Route::resource('zho-entertainment', EntertainmentController::class);

// SUGGESTION

Route::resource('zho-suggestion', SuggestionController::class);

// CATERING

Route::resource('zho-catering', CateringController::class);

// EQUIPMENT

Route::resource('zho-equipment', EquipmentController::class);

//PLACE IMAGE

Route::resource('place-image', PlaceImageController::class);

// COMPANY

Route::resource('company-image', CompanyImageController::class);

// ENTERTAINMENT

Route::resource('entertainment-image', EntertainmentImageController::class);

// SUGGESTION

Route::resource('suggestion-image', SuggestionImageController::class);

// CATERING

Route::resource('catering-image', CateringImageController::class);

// EQUIPMENT

Route::resource('equipment-image', EquipmentImageController::class);


//PLACE COMMENT

Route::resource('place-comment', PlaceCommentController::class);

// COMPANY

Route::resource('company-comment', CompanyCommentController::class);

// ENTERTAINMENT

Route::resource('entertainment-comment', EntertainmentCommentController::class);

// SUGGESTION

Route::resource('suggestion-comment', SuggestionCommentController::class);

// CATERING

Route::resource('catering-comment', CateringCommentController::class);

// EQUIPMENT

Route::resource('equipment-comment', EquipmentCommentController::class);

// MESSAGE

Route::resource('message', MessageController::class);

// VERIFICATION

Route::resource('verification', VerificationController::class);


// NOTIFICATION

Route::resource('notification', NotificationController::class);


