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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/Admin','AdminController@admin');
Route::get('/AdminLogin','UserController@showAdminLogin');
Route::post('/doLoginAdmin','UserController@doLoginAdmin');

Route::get('/Admin/Schedule','AdminController@Schedule');


Route::get('/Admin/Trainee','AdminController@Trainee');
Route::get('/Admin/Trainee/{id}', ['uses' => 'AdminController@TraineeInfo']);
Route::get('/getTrainee','AdminController@getTrainee');
Route::post('/addTrainee','AdminController@addTrainee');
Route::post('/editTrainee','AdminController@editTrainee');
Route::post('/delTrainee','AdminController@delTrainee');


Route::get('/Admin/Reports','AdminController@Reports');



Route::get('/','UserController@login');
Route::post('/doLogin','UserController@doLogin');

Route::get('/logout',function(){
	Auth::logout();
	return redirect('/');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
