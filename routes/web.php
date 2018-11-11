<?php

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
    return view('main');
});
Route::get('/travelguide', function () {
    return view('frontend.travelguide');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/available','AvailableController@availability')->name('availability');
Route::get('/bookingform','BookingController@bookingform')->name('bookingform');
Route::get('/users/logout','Auth\LoginController@userlogout')->name('users.logout');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function(){
Route::get('/login','Auth\AdminLoginController@ShowLoginForm')->name('admin.login');
Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdminController@index')->name('admin.dashboard');
Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
// Route::get('/roomtypes', 'AdminController@roomtype')->name('admin.roomtypes');
// Route::post('/roomtype','AdminController@InsertRoomType')->name('admin.roomtype.submit');
Route::get('/roomtypes', 'RoomtypeController@index')->name('admin.roomtypes');

Route::post('/roomtypes/upload', 'RoomtypeController@store')->name('admin.roomtypes.submit');

});

// Route::get('/roomtypes', 'ImageController@index')->name('viewroomtypes');
// Route::get('/roomtypes/upload', 'ImageController@create')->name('formfileroomtypes');
// Route::post('/roomtypes/upload', 'ImageController@store')->name('uploadroomtypes');
