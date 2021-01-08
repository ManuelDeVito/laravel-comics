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
})->name('page-welcome');

Route::get('/single/{id}', function ($id) {
    $array_comics = config('comics');

    if(array_key_exists($id, $array_comics)) {

        $single_fumetto = $array_comics[$id];

        $data = [
            'comic' => $single_fumetto
        ];

        return view('single', $data);
    }
    abort(404);
})->name('single-comic');


Route::get('/comics', function () {
    $array_comics = config('comics');

        $data = [
            'series' => $array_comics
        ];

    return view('home', $data);
});
