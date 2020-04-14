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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'UserInterface@Index');
Route::get('/BalochiSingers', 'UserInterface@Balochi_Singers');
Route::get('/KharaniSingers', 'UserInterface@Kharani_Singers');
Route::get('/BalochiAlbums/{id}', 'UserInterface@Balochi_Albums');
Route::get('Nav_Collection', 'UserInterface@Dynamic_Nav');
Route::get('/FindTrack/{id}','UserInterface@Find_Track');

Route::get('/Dashboard', function () {
    return view('AdminPanel.Dashboard.Dashboard');
});


Route::resource('/Collection','CollectionController');
Route::resource('/Singer','SingerController');
Route::resource('/Album','AlbumController');
Route::resource('/Track','TrackController');
Route::resource('/Slider','SliderController');
Route::resource('/Single','SingleCollectionController');
