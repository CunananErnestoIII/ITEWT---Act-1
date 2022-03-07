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

Route::get('/', function () {
    return view('personal');
});

Route::get('/news/{mm}/{dd}/{yyyy}', function ($mm, $dd, $yyyy) {
    return "<h1>News " . $mm . "/" . $dd . "/" . $yyyy . "</h1>";
});

Route::get('/About/{id}/{name}', function ($id, $name) {
    return "<h3>I am " . $name . ", I am " . $id ." years old";
}) ->where(['id' => '[0-9]+']);