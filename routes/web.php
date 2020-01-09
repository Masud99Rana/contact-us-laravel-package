<?php

Route::get('/contact', function() {
    return view('contact::contact');
})->name('contact');

Route::post('/contact', function() {
    return request()->all();
});