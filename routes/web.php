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

Route::get('/', 'HomeController@index')->name('home');

$navLinks = config('navLinks');
foreach ($navLinks as $link) {
    $linkController = str_replace(" ","", $link) .'Controller';
    Route::get('/'.$linkController, $linkController . '@index')->name($link);
}


