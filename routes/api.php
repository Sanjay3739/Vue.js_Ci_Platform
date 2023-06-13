<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\MissionskillController;
use App\Http\Controllers\MissionthemeController;
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

