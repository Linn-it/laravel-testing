<?php

use App\Http\Controllers\ListController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ListController::class,'index']);

Route::get('/datas/{id}',[ListController::class,'show']);

Route::get('/create',[ListController::class,'create']);

Route::post('/listings',[ListController::class,'store']);


// Common Resource routes
// index - show all listings
// show - show single listing
// create - show from to create new listing
// store - store new listing
// edit - show from to edit listing
// update - update listing
// delete - delete listing

