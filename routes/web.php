<?php
Route::group(['namespace' => 'Masud99Rana\Contact\Http\Controllers','middleware' => 'web'], function () {
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@send');
});