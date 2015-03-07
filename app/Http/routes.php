<?php


Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');
//Route::get('/task', 'TaskController@index');



//Route::controllers([
	//'auth' => 'Auth\AuthController',
	//'password' => 'Auth\PasswordController',
//]);
//Route::model('tasks', 'Task');
//Route::model('catagories', 'Catagory');

//Route::bind('tasks', function($value, $route) {
	//return App\Task::whereid($value)->first();
//});
//Route::bind('catagories', function($value, $route) {
	//return App\Catagory::whereid($value)->first();
//});




//Route::resource('catagories', 'CatagoriesController');
//Route::resource('catagories.tasks', 'TasksController');

//Route::model('voters', 'Voter');
//Route::model('candidates', 'Candidate');


Route::resource('voters', 'VotersController@index');
Route::resource('candidates', 'CandidatesController@index');

