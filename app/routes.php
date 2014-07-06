<?php

//Event::listen('illuminate.query', function($sql){
//    var_dump($sql);
//});

//dd(App::Environment());

Route::get('/', ['as' => 'home', 'uses' =>'ThreadsController@index']);
Route::resource('threads', 'ThreadsController', ['only' => ['store', 'show']]);


#Comments
Route::resource('comments', 'CommentsController', ['only' => ['store']]);

#Tag
Route::get('tag/{id}', 'TagsController@show');

#Events
Route::post('events.store', ['as' => 'events.store', 'uses' => 'EventsController@store']);
Route::get('/events', ['as' => 'events', 'uses' => 'EventsController@index']);

#Jobs
Route::get('create/jobs', ['as' => 'create/jobs', 'uses' => 'JobsController@create']);
Route::post('jobs.store', ['as' => 'jobs.store', 'uses' => 'JobsController@store']);
Route::get('/jobs', ['as' => 'jobs', 'uses' => 'JobsController@index']);
Route::get('job/{id}', 'JobsController@show');

#Register
Route::get('/register', ['as' => 'register' , 'uses' => 'UsersController@create']);
Route::resource('register', 'UsersController', ['only' => ['create', 'store']]);

#Authentication
Route::get('login', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::post('session.store', ['as' => 'session.store', 'uses' => 'SessionsController@store']);

//




