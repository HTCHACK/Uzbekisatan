<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Countries;
use Illuminate\Support\Facades\Mail;
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

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);



Route::get('/', 'HomeController@index')->name('home');

Route::get('/sendmail',function(){
    $details = [
        'title'=>'Mail From Asadbek',
        'body'=>'Asadbek Test',
    ];

    \Mail::to('asatbekxalimjonov2000@gmail.com')->send(new \App\Mail\TestMail($details));
    echo "Email Has been send";
});



Route::resource('countries', 'CountryController');
Route::resource('regions', 'RegionController');
Route::resource('districts', 'DistrictController');
Route::resource('hotels', 'HotelController');
Route::resource('tourists', 'TouristController');
Route::resource('contacts', 'ContactController');
Route::resource('galleries', 'GalleryController');
Route::resource('emails', 'EmailController')->only('store','create');


Route::get('/viloyatlar/jadval/{id}', 'RegionController@show')->name('regionsuz.show');
Route::get('/viloyatlar/xaritasi/{id}', 'RegionController@map')->name('regionsuz.map');
Route::get('/viloyatlar', 'RegionController@RegionPage')->name('regionsuz.index');
Route::get('/viloyatlar-xaritasi', 'CountryController@MapPage')->name('mappage.map');
Route::get('viloyat/tuman/{id}', 'DistrictController@show')->name('districtsuz.show');
Route::get('/tuman/joy/{id}', 'TouristController@show')->name('touristsuz.show');
Route::get('/tuman/mehmonxona/{id}', 'HotelController@show')->name('hotelsuz.show');
Route::get('/aloqa', 'ContactController@ContactPage')->name('contactsuz.index');
Route::get('/galareya', 'GalleryController@GalleryPage')->name('galleriesuz.index');
Route::get('/email', 'SendEmailController@index')->name('email.index');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'Admin\AdminController@index')->name('admin.index');
    Route::resource('countries', 'CountryController');
    Route::resource('regions', 'RegionController');
    Route::resource('districts', 'DistrictController');
    Route::resource('hotels', 'HotelController')->except('show');
    Route::resource('tourists', 'TouristController')->except('show');;
    Route::resource('galleries', 'GalleryController');
    Route::resource('contacts', 'ContactController');
    Route::resource('emails', 'EmailController')->only('index','destroy');
    Route::resource('send_emails','SendEmailController');
});

Route::get('/user/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('force_to_logout');
