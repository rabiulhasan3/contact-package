<?php

//web.php
Route::group(['namespace'=>'Hasan\Contact\Http\Controllers'],function(){
    
    Route::get('contact','ContactController@index')->name('contact');
    Route::post('contact','ContactController@send');

});