<?php
Route::get('/article', [
    'as'         => 'article',
    'uses'       => 'ArticleController@index',
]);