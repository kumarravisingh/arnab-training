<?php

Route::get('/',function(){
    return view('welcome');
});
Route::get('/hello','Tarrang@getData')->name('newFileRoute');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('test-auth','HomeController@testAuth');

Route::get('/save','Tarrang@saveData');
