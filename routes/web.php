<?php

use Illuminate\Support\Facades\Route;
use App\MyVideo;
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

    return view('index', compact('videos'));
});

Route::get('/sport', function () {
    $videos = MyVideo::all();
    return view('filters.sports.index', compact('videos'));
})->name('sport');

Route::get('/code', function () {
    $videos = MyVideo::all();
    return view('filters.code.index', compact('videos'));
})->name('code');

Route::get('/music', function () {
    $videos = MyVideo::all();
    return view('filters.music.index', compact('videos'));
})->name('music');

Route::resource('/MyVideos', 'MyVideosController');

Route::resource('/filters', 'FiltersController');
