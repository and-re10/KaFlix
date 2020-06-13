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
    return view('index');
});

Route::get('/sport', function () {
    $videos = MyVideo::all();
    return view('filters.sports.index', compact('videos'));
})->name('sport');

Route::resource('/MyVideos', 'MyVideosController');
