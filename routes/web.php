<?php

use App\Http\Controllers\NationController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TourController;
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




Route::get('/', [PageController::class, 'index'])->name('page.index');


Route::get('tours', [TourController::class, 'index'])->name('tours.index');
Route::get('tours/{tour}', [TourController::class, 'show'])->name('tours.show');




//Route::get('nation/{nation}', [TourController::class, 'nation'])->name('tours.nation');
//Route::get('nation/{nation}/{destination}', [TourController::class, 'destination'])->name('tours.destination');

Route::get('nation/{nation}', [NationController::class, 'show'])->name('nations.show');
Route::get('nation/{nation}/{destination}', [DestinationController::class, 'show'])->name('destinations.show');



Route::get('hotels', [HotelController::class, 'index'])->name('hotels.index');
Route::get('hotels/{hotel}', [HotelController::class, 'show'])->name('hotels.show');



Route::get('posts/', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('posts/category/{category}', [PostController::class, 'category'])->name('posts.category');
Route::get('posts/tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');




