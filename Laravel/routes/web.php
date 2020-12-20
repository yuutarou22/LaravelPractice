<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');
