<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\InstrumentCategoryController;
use App\Http\Controllers\InstrumentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register',[UserController::class,'registerUser']);
Route::post('/login',[UserController::class,'login']);

Route::get('/instrument-category',[InstrumentCategoryController::class,'index']);
Route::get('/instrument-category/{instrument_category}',[InstrumentCategoryController::class,'show']);
Route::get('/instruments-from-category/{instrument_category}',[InstrumentCategoryController::class,'categoryWithInstruments']);
Route::get('/instrument/{instrument}',[InstrumentController::class,'show']);



Route::group(['middleware' => ['auth:sanctum']],function(){
    Route::get('/instrument',[InstrumentController::class,'index']);
    Route::post('/instrument-category',[InstrumentCategoryController::class,'store']);
    Route::put('/instrument-category/{instrument_category}',[InstrumentCategoryController::class,'update']);
    Route::delete('/instrument-category/{instrument_category}',[InstrumentCategoryController::class,'destroy']);
    Route::post('/instrument',[InstrumentController::class,'store']);
    Route::put('/instrument/{instrument}',[InstrumentController::class,'update']);
    Route::delete('/instrument/{instrument}',[InstrumentController::class,'destroy']);
    Route::post('/instrument/{instrument}/comment',[InstrumentController::class,'makeComment']);
    Route::delete('/delete-comment/{comment}',[CommentController::class,'destroy']);
    Route::post('/instrument/{instrument}/rate',[InstrumentController::class,'rateInstrument']);
    Route::post('/buy', [OrderController::class,'store']);
    Route::get('/purchases',[OrderController::class,'index']);
//    Route::put('/instrument/{instrument}/rate',[InstrumentController::class,'updateRate']);


});
