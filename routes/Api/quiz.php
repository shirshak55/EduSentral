<?php

/**
 * All route names are prefixed with 'quiz'.
 */
Route::group([
    'prefix'     => 'quiz',
    'as'         => 'quiz.',
    'namespace'  => 'Quiz',
], function () {
    Route::get('boards','BoardsController@index');
    Route::get('{board}/sets','SetsController@index');
    Route::get('sets/{set}','SetsController@show');
});
