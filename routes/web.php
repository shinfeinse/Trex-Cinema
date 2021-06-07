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
    $movie = DB::select('select * from movies limit 3');
    $comingsoon = DB::select('select * from comingsoon Order By id DESC limit 3');
    return view('welcome', ['movie'=>$movie], ['comingsoon'=>$comingsoon]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('admin/home/form/create', 'HomeController@adminHomeForm')->name('admin.homeform')->middleware('is_admin');
Route::get('admin/home/form/update/{id}', 'HomeController@adminHomeUpdateForm')->name('admin.homeupdate')->middleware('is_admin');
Route::post('admin/home/form/create/submit', 'HomeController@adminHomeFormSubmit')->name('admin.homeformcreate')->middleware('is_admin');
Route::post('admin/home/form/update/submit', 'HomeController@adminHomeFormUpdate')->name('admin.homeformupdate')->middleware('is_admin');
Route::get('admin/home/delete/{id}', 'HomeController@adminHomeDelete')->name('admin.homedelete')->middleware('is_admin');
Route::get('admin/banner', 'HomeController@adminBanner')->name('admin.banner')->middleware('is_admin');
Route::get('admin/coming', 'HomeController@adminComing')->name('admin.coming')->middleware('is_admin');
Route::get('admin/coming/form/create', 'HomeController@adminComingForm')->name('admin.comingform')->middleware('is_admin');
Route::get('admin/coming/form/update/{id}', 'HomeController@adminComingUpdateForm')->name('admin.comingupdate')->middleware('is_admin');
Route::post('admin/coming/form/create/submit', 'HomeController@adminComingFormSubmit')->name('admin.comingformcreate')->middleware('is_admin');
Route::post('admin/coming/form/update/submit', 'HomeController@adminComingFormUpdate')->name('admin.comingformupdate')->middleware('is_admin');
Route::get('admin/coming/delete/{id}', 'HomeController@adminComingDelete')->name('admin.comingdelete')->middleware('is_admin');
Route::get('admin/ticket', 'HomeController@adminTicket')->name('admin.ticket')->middleware('is_admin');
Route::get('admin/ticket/form/create', 'HomeController@adminTicketForm')->name('admin.ticketform')->middleware('is_admin');
Route::get('admin/ticket/form/update/{id}', 'HomeController@adminTicketUpdateForm')->name('admin.ticketupdate')->middleware('is_admin');
Route::post('admin/ticket/form/create/submit', 'HomeController@adminTicketFormSubmit')->name('admin.ticketformcreate')->middleware('is_admin');
Route::post('admin/ticket/form/update/submit', 'HomeController@adminTicketFormUpdate')->name('admin.ticketformupdate')->middleware('is_admin');
Route::get('admin/ticket/delete/{id}', 'HomeController@adminTicketDelete')->name('admin.ticketdelete')->middleware('is_admin');
Route::get('/info/{name}', 'HomeController@info')->name('detail');
Route::get('/booking/{name}/{id}', 'HomeController@booking')->name('booking');
Route::post('/booking/{name}/submit', 'HomeController@bookingSubmit')->name('bookingsubmit');
Route::get('/comingsoon', 'HomeController@comingsoon')->name('comingsoon');
Route::post('/comingsoon/search', 'HomeController@comingsoonsearch')->name('comingsoonsearch');
Route::get('/comingsoon/title/{sort}', 'HomeController@comingsoontitle')->name('comingsoontitle');
Route::get('/comingsoon/filter/{filter}', 'HomeController@comingsoonfilter')->name('comingsoonfilter');
Route::get('/profile/{email}', 'HomeController@profile')->name('profile');
Route::get('/profile/{email}/update', 'HomeController@profileupdateform')->name('profileupdateform');
Route::post('/profile/update/submit', 'HomeController@profileupdate')->name('profileupdate');
Route::post('/profile/create', 'HomeController@profilecreate')->name('profilecreate');
Route::get('/history/{email}', 'HomeController@history')->name('history');

