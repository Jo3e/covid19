<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Assessment\AssessmentController@index');

Route::namespace('Assessment')->group(function(){
    Route::resource('assessments', 'AssessmentController');
});
