<?php

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@getHome'
]);
