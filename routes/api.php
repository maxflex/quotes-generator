<?php
    Route::group(['namespace' => 'Api', 'as' => 'api.'], function () {
        Route::get('getRandom', 'QuotesController@getRandom');
        Route::get('getNextRandom', 'QuotesController@getNextRandom');
        Route::resource('quotes', 'QuotesController');
    });
