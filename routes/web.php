<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/********************************************** */
//****************** Portofolio ****************/
/********************************************** */

Route::get('/', 'BaseController@index');

/********************************************** */
//****************** Dashboard ****************/
/********************************************** */

//dashboard 
Route::get('/dashboard', 'DashboardController@index');

Route::post('edit-home', 'DashboardController@editHomeInfo');

Route::post('edit-aboutme', 'DashboardController@editAboutmeInfo');

Route::post('edit-personalInfo', 'DashboardController@editPersonalInfo');

//edit contact me
Route::post('/edit-contactme', 'DashboardController@editContactmeInfo');

//edit social links
Route::post('/edit-sociallinks', 'DashboardController@editSocialLinks');

//****************** Skills ****************/
//add skill
Route::post('add-skill', 'SkillController@save');

//get skill
Route::get('/skill/{id}', 'SkillController@getSkill');

//edit skill
Route::post('/skill/{id}/edit', 'SkillController@update');

//delete skill
Route::post('/skill/{id}/delete', 'SkillController@destroy');

//************** End Skills ************////

//************** Technique ************////
//add technique
Route::post('add-technique', 'TechniqueController@save');

//get technique
Route::get('/technique/{id}', 'TechniqueController@getTechnique');

//edit technique
Route::post('/technique/{id}/edit', 'TechniqueController@update');

//delete technique
Route::post('/technique/{id}/delete', 'TechniqueController@destroy');

//*************** End Technique ************////

//Route::get('contact-me', 'ContactController@getContact');

Route::post('contact-me', 'ContactController@saveContact');