<?php

/**
 * All route names are prefixed with 'quiz'.
 */
Route::group([
    'prefix'     => 'quiz',
    'as'         => 'quiz.',
    'namespace'  => 'Quiz',
    'middleware' => 'access.routeNeedsRole:Executive',
], function () {
    Route::post('rules/get','Rule\RulesTableController')->name('rules.get');
    Route::post('boards/get','Board\BoardsTableController')->name('boards.get');
    Route::post('sets/get','Set\SetsTableController@invoke')->name('sets.get');

    Route::resource('sets','Set\SetsController');
    Route::resource('subjects','Subject\SubjectsController');
    Route::resource('rules','Rule\RulesController',['except'=>'show']);
    Route::resource('boards','Board\BoardsController',['except'=>'show']);

});
