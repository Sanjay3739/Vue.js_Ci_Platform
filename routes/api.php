<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\MissionskillController;
use App\Http\Controllers\MissionthemeController;
use App\Http\Controllers\MissionapplicationController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('cmspages', CmsController::class);
Route::resource('missionskill', MissionskillController::class);
Route::resource('missiontheme', MissionthemeController::class);
Route::resource('missionapplication', MissionapplicationController::class);
Route::put('/missionapplication/{id}/approve', [MissionapplicationController::class, 'approve']);
Route::put('/missionapplication/{id}/decline', [MissionapplicationController::class, 'decline']);
Route::resource('story', StoryController::class);
Route::put('/story/{id}/approve', [StoryController::class, 'approve']);
Route::put('/story/{id}/decline', [StoryController::class, 'decline']);
Route::resource('user', UserController::class);
Route::get('countries', function () {
    return \App\Models\Country::get(['name', 'country_id']);
});


// Route::resource('city', CityController::class);
