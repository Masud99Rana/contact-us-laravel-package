<?php

Route::group(['namespace' => 'Masud99Rana\Contact\Http\Controllers','middleware' => 'web'], function () {
	
	/**
	 *  Show contact page
	 */
    Route::get('contact', 'ContactController@index')->name('contact');

    /**
     *  Send user query via post method
     */
    Route::post('contact', 'ContactController@send');
});