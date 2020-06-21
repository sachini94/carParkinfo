<?php


Route::get('/', function () {
    return view('welcome');
});

Route::post('uploadFileAdvamContacts','uploadController@uploadFileAdvamContacts');
