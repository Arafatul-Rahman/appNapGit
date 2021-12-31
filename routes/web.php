<?php

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

Route::get('/', function () {
    return view('welcome');
});




Route::get('/userVarification/{id}', [App\Http\Controllers\web\UserRegistretionController::class, 'userVarification']);
Route::post('/updatePassword/{id}', [App\Http\Controllers\web\UserRegistretionController::class, 'updatePassword'])->name('updatePassword');
Route::get('/resetPasswordShow/{id}', [App\Http\Controllers\web\UserControllerWeb::class, 'resetPasswordShow'])->name('resetPasswordShow');
Route::post('/updateResetPassword/{id}', [App\Http\Controllers\web\UserControllerWeb::class, 'updateResetPassword'])->name('updateResetPassword');
Route::get('resetPasswordconfarm', [App\Http\Controllers\web\UserControllerWeb::class, 'resetPasswordconfarm'])->name('resetPasswordconfarm');

Route::get('/', ['as'=>'login', function (){ return redirect()->route('web.login');}]);
Route::group(['prefix' => 'web','as'=>'web.'], function (){

    //login
	Route::get('login', [App\Http\Controllers\web\UserControllerWeb::class, 'getLogin'])->name('login');
	Route::post('login', [App\Http\Controllers\web\UserControllerWeb::class, 'postLogin']);
	Route::post('logout', [App\Http\Controllers\web\UserControllerWeb::class, 'logout'])->name('logout');

    //registretion
	Route::get('register', [App\Http\Controllers\web\UserRegistretionController::class, 'getRegister'])->name('register');
	Route::get('registerConfirm', [App\Http\Controllers\web\UserRegistretionController::class, 'registerConfirm'])->name('registerConfirm');
	Route::post('register', [App\Http\Controllers\web\UserRegistretionController::class, 'postRegister']);

	Route::get('/resetPassword', [App\Http\Controllers\web\UserControllerWeb::class, 'resetPassword'])->name('resetPassword');
	Route::post('/resetEmail', [App\Http\Controllers\web\UserControllerWeb::class, 'resetEmail'])->name('resetEmail');

	Route::group(['middleware' => 'userAuth'], function (){
		Route::get('/home', [App\Http\Controllers\web\UserControllerWeb::class, 'home'])->name('home');
		//make own profile
		Route::get('/profile', 'profileController@getUser')->name('profile');
		Route::post('/updateProfile', 'profileController@updateProfile')->name('updateProfile');
		//admin user image
		Route::get('/userImage', 'profileController@userImage')->name('userImage');
		Route::post('/uplodeImage', 'profileController@uplodeImage')->name('uplodeImage');
		// Route::resource('users', 'UseruserController');
	});
});
