<?php

/**
 * All routes for Quiz
 */

Route::group(['middleware'=>'auth','namespace'=>'Quiz','as'=>'quiz.'],function(){
    Route::get('boards','BoardsController@index')->name('boards');
    Route::get('{board}/sets','BoardSetsController@index')->name('board.sets');
    Route::get('quiz/results','ResultsController@index')->name('results');
    Route::get('sets/{set}','SetQuestionController@index')->name('set.questions');
});