<?php

use App\Http\Controllers\Admin\AccomodationController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\EntranceController;
use App\Http\Controllers\Admin\ExtensionController;
use App\Http\Controllers\Admin\GuideController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\Admin\InquireController;
use App\Http\Controllers\Admin\LodgeController;
use App\Http\Controllers\Admin\NationController;
use App\Http\Controllers\Admin\OperatorController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RestaurantController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\TransferController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::get('', [HomeController::class, 'index'] )
// ->middleware('can:admin.home')
->name('admin.home');

Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories'); //done
Route::resource('posts', PostController::class)->except('show')->names('admin.posts'); //done
Route::resource('tags', TagController::class)->except('show')->names('admin.tags'); //done
Route::resource('nations', NationController::class)->names('admin.nations');
// add ckeditor
Route::post('nations/upload', [NationController::class, 'upload'])->name('nations.upload');



Route::resource('destinations', DestinationController::class)->names('admin.destinations');
// Routes Tours
Route::resource('tours', TourController::class)->names('admin.tours');

Route::post('plans', [TourController::class, 'addItinerary'])->name('admin.tours.additinerary');
Route::delete('plans/{plan}', [TourController::class, 'deleteItinerary'])->name('admin.tours.deleteitinerary');
Route::get('plans/{plan}/edit', [TourController::class, 'editItinerary'])->name('admin.tours.edititinerary');
Route::put('plans/{plan}', [TourController::class, 'updateItinerary'])->name('admin.tours.updateitinerary');


Route::resource('hotels', HotelController::class)->names('admin.hotels');
Route::resource('user', UserController::class)->only('index','edit','update')->names('admin.users'); //done
Route::resource('roles', RoleController::class)->names('admin.roles');
Route::resource('extensions', ExtensionController::class)->names('admin.extensions');

//Done
Route::resource('entrances', EntranceController::class)->names('admin.entrances');
Route::resource('guides', GuideController::class)->names('admin.guides');
Route::resource('accomodations', AccomodationController::class)->names('admin.accomodations');
Route::resource('lodges', LodgeController::class)->names('admin.lodges');
Route::resource('operators', OperatorController::class)->names('admin.operators');
Route::resource('restaurants', RestaurantController::class)->names('admin.restaurants');
Route::resource('transfers', TransferController::class)->names('admin.transfers');
Route::resource('inquire', InquireController::class)->names('admin.inquires');
Route::resource('activities', ActivityController::class)->names('admin.activities');


// Route::group(['Middleware'=>'CustomCKFinderAuth'], function(){
//     Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
//     ->name('ckfinder_connector');

//     Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
//         ->name('ckfinder_browser');
// });

