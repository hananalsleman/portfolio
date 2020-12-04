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


Auth::routes(['register' => false]);


Route::post('/dashboard/logout', 'Auth\LoginController@logout');

/********************************************** */
//****************** Portofolio ****************/
/********************************************** */

Route::get('/', 'BaseController@index');

Route::get('/about',  'BaseController@getAbout');

Route::get('/achievements', 'BaseController@getAchievements');

Route::get('/experience', 'BaseController@getExperiences');


//Route::get('contact-me', 'ContactController@getContact');

Route::post('contact-me', 'ContactController@saveContact');

/********************************************** */
//****************** Dashboard ****************/
/********************************************** */

//dashboard 

//tabs for dashboard
//home
Route::get('/dashboard', 'DashboardController@index');
//about
Route::get('/dashboard/about', 'DashboardController@about');
//achievements
Route::get('/dashboard/achievements', 'DashboardController@achievements');
//experience
Route::get('/dashboard/experience', 'DashboardController@experience');
//contact
Route::get('/dashboard/contact', 'DashboardController@contact');
//messages
Route::get('/dashboard/messages', 'ContactController@getMessages');






//****************** Home Page ****************/
//modals in home page
Route::post('edit-home', 'DashboardController@editHomeInfo');
//****************** End Home Page ****************/




//****************** About Page ****************/
//modals in about page
Route::post('/dashboard/edit-aboutme', 'DashboardController@editAboutmeInfo');

//******** Skills **********/
//add skill
Route::post('/dashboard/add-skill', 'SkillController@save');

//get skill
Route::get('/dashboard/skill/{id}', 'SkillController@getSkill');

//edit skill
Route::post('/dashboard/skill/{id}/edit', 'SkillController@update');

//delete skill
Route::post('/dashboard/skill/{id}/delete', 'SkillController@destroy');

//******* End Skills ****////

//***** Technique ********////
//add technique
Route::post('/dashboard/add-technique', 'TechniqueController@save');

//get technique
Route::get('/dashboard/technique/{id}', 'TechniqueController@getTechnique');

//edit technique
Route::post('/dashboard/technique/{id}/edit', 'TechniqueController@update');

//delete technique
Route::post('/dashboard/technique/{id}/delete', 'TechniqueController@destroy');

//**** End Technique **/***/ */

Route::post('/dashboard/edit-personalInfo', 'DashboardController@editPersonalInfo');

//****************** End About Page ****************/



//******************  Achievements Page ****************/

//add achievement
Route::post('/dashboard/add-achievement', 'AchievementController@save');

//get achievement
Route::get('/dashboard/achievement/{id}', 'AchievementController@getAchievement');

//edit achievement
Route::post('/dashboard/achievement/{id}/edit', 'AchievementController@update');

//delete achievement
Route::post('/dashboard/achievement/{id}/delete', 'AchievementController@destroy');


//****************** End  Achievements Page ****************/ 



//****************** Experience Page ****************/ 

//add experience
Route::post('/dashboard/add-experience', 'ExperienceController@save');

//get experience
Route::get('/dashboard/experience/{id}', 'ExperienceController@getExperience');

//edit experience
Route::post('/dashboard/experience/{id}/edit', 'ExperienceController@update');

//delete experience
Route::post('/dashboard/experience/{id}/delete', 'ExperienceController@destroy');

//****************** End Experience Page ****************/ 



//****************** Contact  Page ****************/ 
//edit contact me
Route::post('/dashboard/edit-contactme', 'DashboardController@editContactmeInfo');

//edit social links
Route::post('/dashboard/edit-sociallinks', 'DashboardController@editSocialLinks');

//****************** End Contact Page ****************/ 


