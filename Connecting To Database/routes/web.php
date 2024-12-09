<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use Illuminate\Support\Facades\DB;
Route::get('/test-database', function () {
// Fetch data from the 'users' table
$users = DB::select('SELECT * FROM users');
return $users; // Show the users data (empty array if no data)
});
