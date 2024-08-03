<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('dashboard', 'dashboard');

Route::get('/broadcast',function (){
   broadcast(new \App\Events\TestEvent('test'));
});
