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
    return view('welcome');
});
//setting web front end
Route::namespace('web')->prefix('web')->group(function(){
	foreach (File::allFiles(__DIR__.'/web') as $partial) {
		require $partial->getPathname();
	}
});

//setting route user admin
Route::namespace('user-admin')->prefix('user-admin')->group(function(){
	foreach (File::allFiles(__DIR__.'/user-admin') as $partial) {
		require $partial->getPathname();
	}
});

//setting route super admin
Route::namespace('super-admin')->prefix('super-admin')->group(function(){
	foreach (File::allFiles(__DIR__.'/super-admin') as $partial) {
		require $partial->getPathname();
	}
});