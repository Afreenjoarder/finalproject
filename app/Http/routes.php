<?php

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');


//Route::controllers([
    //'auth' => 'Auth\AuthController',
    //'password' => 'Auth\PasswordController',
//]);

//Route::get('/about', 'AboutController@about');

//Route::get('/blog', 'BlogController@index');

//Route::get('/contact', 'ContactController@contact');

//Route::get('/newuserprofile', 'NuserprofileController@index');

//Route::get('/task/index', 'TaskController@index');

//Route::model('taskCatagories', 'Taskcatagories');

//Route::bind('taskCatagories', function($value, $route) {
    //return App\Taskcatagories::whereId($value)->first();
//});


//Route::resource('taskCatagories', 'TaskscatagoriesController');




//Route::bind('tasksCatagories', function($value, $route) {
    //return App\TaskC::whereId($value)->first();
//});
//Route::resource('tasksCatagories', 'TaskscatagoriesController');

//
//Route::model('tasksCatagories', 'TaskC');
// Use slugs rather than IDs in URLs
//Route::bind('tasksCatagories', function($value, $route) {
    //return App\TaskC::whereid($value)->first();
//});


//Route::resource('tasksCatagories', 'TaskscatagoriesController');
Route::model('voters', 'Voter');
Route::model('candidates', 'Candidate');

Route::bind('voters', function($value, $route) {
    return App\Voter::wherevoter_id($value)->first();
});
Route::bind('candidates', function($value, $route) {
    return App\Candidate::whereid($value)->first();
});
Route::resource('voters', 'VotersController');
Route::resource('candidates', 'CandidatesController');


