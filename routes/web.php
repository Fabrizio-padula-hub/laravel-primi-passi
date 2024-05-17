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
    $data = [
        'name' => 'Bleach',
        'creator' => 'Tite Kubo',
        'description' => 'Segue le avventure del giovane Ichigo Kurosaki, il quale riceve accidentalmente poteri da shinigami da Rukia Kuchiki.',
    ];
    return view('home', $data);
});
