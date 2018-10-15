<?php

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


Route::get('/index', function () {
    return view('index2');
});



Route::any('/tus/{any?}', function () {
    $response = app('tus-server')->serve();

    return $response->send();
})->where('any', '.*');

Route::post('/upload', function()
{
    return Plupload::receive('file', function ($file)
    {
        $file->move(storage_path('app/public/uploads'));
        return 'ready';
    });
});