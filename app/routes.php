<?php

Route::get('/', function()
{
	return View::make('hello');
});

// http://laravel4learning/tests
Route::get('tests', function()
{
    // echo timezone
    echo Config::get('app.timezone');

    // echo environment
    // config environment at \bootstrap\start.php
    echo App::environment();

    return 'Users!';
});

Route::post('foo/bar', function()
{
    return 'Hello World';
});

Route::any('foo', function()
{
    echo URL::to('foo');
    return 'Hello World';
});

Route::get('foo', array('https', function()
{
    return 'Must be over HTTPS';
}));

Route::get('user/{id}', function($id)
{
    return 'User '.$id;
});


Route::get('user', array('before' => 'old', function()
{
    return 'You are over 200 years old!';
}));