<?php

use Illuminate\Support\Facades\Route;
use Pysosu\Contact\Http\Controllers\ContactController;

Route::controller(ContactController::class)->group(function(){
    Route::get('/contact', 'index')->name('contact.index');
    Route::post('/contact', 'send')->name('contact.send');
});
