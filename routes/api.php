<?php

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

Route::group(['middleware' => 'api','prefix' => 'auth'], function ($router) {
    Route::post('/login', [App\Http\Controllers\web\UserController::class, 'login']);
    Route::post('/register', [App\Http\Controllers\web\UserController::class, 'register']);
    Route::post('/logout', [App\Http\Controllers\web\UserController::class, 'logout']);
    Route::post('/refresh', [App\Http\Controllers\web\UserController::class, 'refresh']);
    Route::get('/user-profile', [App\Http\Controllers\web\UserController::class, 'userProfile']); 
    Route::get('profileEdit',[App\Http\Controllers\web\UserProfileController::class, 'userEdit']);
    Route::get('profileEdit',[App\Http\Controllers\web\UserProfileController::class, 'userEdit']);
    Route::post('profileUpdate',[App\Http\Controllers\web\UserProfileController::class, 'profileUpdate']);
    Route::post('profileImageUpload',[App\Http\Controllers\web\UserProfileController::class, 'profileImageUpload']);
});


Route::group(['prefix' => 'web/', 'as' => 'web.'], function (){
    //blog
    Route::get('blogPostListData', [App\Http\Controllers\web\BlogPostControllerWeb::class, 'blogPostListData'])->name('blogPostListData');
    Route::get('blogSinglePost/{id}', [App\Http\Controllers\web\BlogPostControllerWeb::class, 'blogSinglePost'])->name('blogSinglePost');
    Route::post('userFeedbackStore', [App\Http\Controllers\web\UserFeedbackControllerWeb::class, 'userFeedbackStore'])->name('userFeedbackStore');
    //endBlog
});




