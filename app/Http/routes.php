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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/users', function () {
// 	$user = DB::connection('mongodb')->collection('users')->get();
//     return $user;
// });

Route::get('users', [
    'as' => 'users', 'uses' => 'UserController@hello'
]);