<?php

/**
 * All route names are prefixed with 'quiz'.
 */
Route::group([
    'prefix'     => 'quiz',
    'as'         => 'quiz.',
    'namespace'  => 'Quiz',
], function () {
    Route::get('questions','QuestionsController@index');
});
