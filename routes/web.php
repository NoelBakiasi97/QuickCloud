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


//DOMAIN
Route::post('/searchDomain', 'DomainController@search')->name('search');

//CAROUSEL
Route::get('/carousel', 'CarouselController@index')->name('carousel');
Route::get('/editCarouselSlide/{id}', 'CarouselController@edit')->name('editCarousel');
Route::post('/updateCarouselSlide/{id}', 'CarouselController@update')->name('updateCarousel');


//HISTORY
Route::get('/history', 'HistoireController@index')->name('history');
Route::get('/addHistory', 'HistoireController@create')->name('addHistory');
Route::post('/saveHistory', 'HistoireController@store')->name('saveHistory');
Route::get('/editHistory/{id}', 'HistoireController@edit')->name('editHistory');
Route::post('/updateHistory/{id}', 'HistoireController@update')->name('updateHistory');
Route::get('/deleteHistory/{id}', 'HistoireController@destroy')->name('deleteHistory');


//TESTIMONIALS
Route::get('/testimonials', 'TestimonialController@index')->name('testimonials');
Route::get('/addTestimonial', 'TestimonialController@create')->name('addTestimonials');
Route::post('/saveTestimonial', 'TestimonialController@store')->name('saveTestimonials');
Route::get('/deleteTestimonial/{id}', 'TestimonialController@destroy')->name('deleteTestimonials');


//CONTACT
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/editContact/{id}', 'ContactController@edit')->name('editContact');
Route::post('/updateContact/{id}', 'ContactController@update')->name('updateContact');



//EMAIL
Route::get('/subscribers', 'NewsletterController@index')->name('subscribers');
Route::post('/subscribe', 'NewsletterController@store')->name('subscribe');




