<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'web'], function () {
	// Generates all routes for Authentication
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('/', function () {
    	return view('welcome');
	});
	// All routes for Profile CRUD
	Route::resource('profile','ProfileController');
	Route::resource('jobExperience','JobExperienceController');
	Route::resource('education', 'EducationController');
    Route::resource('languageSkill', 'LanguageSkillController');
});
