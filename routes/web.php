<?php

Route::get('/','TestController@welcome');

Route::get('/', function () {
    return view('welcome');
});
