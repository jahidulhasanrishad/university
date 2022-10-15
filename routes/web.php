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
// FRONTEND SECTION
Route::get('/',[
	'uses' => 'FrontendController@view',
	'as'   =>  'view'
]);
Route::get('/Table',[
	'uses' => 'FrontendController@Table',
	'as'   =>  'Table'
]);
// BACKEND SECTION
Route::get('/home',[
	'uses' => 'BackendController@home',
	'as'   =>  'home'
]);
Route::get('/Backend/Apps/Calender',[
	'uses' => 'BackendController@Calender',
	'as'   =>  'Calender'
]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
