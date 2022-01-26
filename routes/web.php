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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//drive controller routes 
 
//Display all routes  
Route::get('drives',"DriveController@index")->name('drives.index');
//create page 
Route::get('drives/create',"DriveController@create")->name('drives.create');
//store in DB 
Route::post('drives/create',"DriveController@store")->name('drives.store');
//Show one Item  
Route::get('drives/show/{id}',"DriveController@show")->name('drives.show');
//edit page  
Route::get('drives/edit/{id}',"DriveController@edit")->name('drives.edit');
//Update in DB 
Route::post('drives/edit/{id}',"DriveController@update")->name('drives.update');
//Delete from DB 
Route::get('drives/remove/{id}',"DriveController@destroy")->name('drives.destroy');
//Download from DB 
Route::get('drives/download/{id}',"DriveController@download")->name('drives.download');

// End of drive controller routes 
