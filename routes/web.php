<?php

use Illuminate\Support\Facades\Route;

// Authentications
Auth::routes([
  'register' => false
]);

// homepage
Route::get('/', 'Assessment\AssessmentController@index');
// dashboard
Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Assessment')->group(function(){
    Route::resource('assessments', 'AssessmentController', ['except' => ['store', 'destroy', 'edit', 'update', 'show']]);
    Route::get('assessments/response', 'AssessmentController@formReport')->name('formReport');
});

Route::namespace('Patient')->group(function() {
  Route::resource('patients', 'PatientsController', ['except' => ['create', 'destroy', 'edit', 'update']]);
});
