<?php

use Illuminate\Support\Facades\Route;
use App\MyVideo;
use App\Filtre;

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

Route::get('/index', function () {

    $videos = MyVideo::all();
    $filtres = Filtre::all();

    return view('index', compact('videos', 'filtres'));
});

Route::resource('/MyVideos', 'MyVideosController');
Route::post('/video/store', 'MyVideosController@store')->name('video.store');

Route::resource('/filters', 'FiltersController');
Route::post('/filter/store', 'FiltersController@store')->name('filter.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
