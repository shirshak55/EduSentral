<?php

/**
 * All routes for Quiz
 */

Route::group(['middleware'=>'auth','namespace'=>'Quiz','as'=>'quiz.'],function(){
    Route::get('boards','BoardsController@index')->name('boards');

    Route::get('quiz/results','ResultsController@index')->name('results');

    Route::get('{board}/sets','BoardSetsController@index')->name('board.sets');

    Route::get('sets/{set}','Sets\\SetQuestionsController@index')->name('set.questions');
    Route::get('sets/{set}/rules','Sets\\SetQuestionsController@showRules')->name('set.questions.rules');

    Route::post('results','Results\\ResultsController@store')->name('results.store');
});