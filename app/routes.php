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