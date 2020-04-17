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

Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//BACKOFFICE
Route::get('/backoffice', 'BackoffController@index')->name('backoffice');

//CAROUSEL
Route::get('/carousel', 'CarouselController@index')->name('carousel');
Route::get('/editCarouselSlide/{id}', 'CarouselController@edit')->name('editCarousel');
Route::post('/updateCarouselSlide/{id}', 'CarouselController@update')->name('updateCarousel');



Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
