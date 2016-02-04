<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//Route::get('/', function() {
//	return View::make('hello');

	// Creates new Task
	/* 
	$task = new Task;
	$task->title = 'Eating breakfast';
	$task->body = 'Remember to buy bread, eggs and milk';
	$task->save();
	*/

	//Update a specific row 
	/*
	$task = Task::find(3);
	$task->title = 'Eating different breakfast';
	$task->body = 'Remember to buy beefsteak';
	$task->save(); 
	*/	 
	
	//Displays information about a specific row
	/*
	$task = Task::find(3);
	return $task->title;
	*/
//});
Route::model('task','Task');
Route::get('task/{id}','TasksController@show')->where('id','\d+');
Route::get('/','TasksController@home');
Route::get('/create','TasksController@create');
Route::post('/create','TasksController@saveCreate');
Route::get('/edit/{task}','TasksController@edit');
Route::post('/edit','TasksController@doEdit');
Route::get('/delete/{task}','TasksController@delete');
Route::post('/delete','TasksController@doDelete');