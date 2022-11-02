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

//home page

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');


//auth other page

Route::get('/forget', 'Auth\ResetController@showLinkRequestForm')->name('forget');

// Route::get('/', function () {
//     return view('/pages/index');
// });
// Route::get('/forget', function(){
//     return view('pages/forget');
// });
// Route::get('/register', function(){
//     return view('pages.register');
// });




Route::get('/membership', function(){
    return view('pages/membership');
});

Route::get('/corpInfo', function(){
    return view('pages/corpInfo');
});
Route::get('/using', function(){
    return view('pages/using');
});
Route::get('/question_answer', function(){
    return view('pages/question_answer');
});
Route::get('/contact', function(){
    return view('pages/contact');
});

//forget pasword
Route::post('/forget', 'AuthController@update');
//register member
Route::post('/register', 'AuthController@register');
//Check register
Route::get('/register_check/{member_id}', 'Auth\RegisterController@register_check');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Manage Luggages
Route::get('/luggage_edit','LuggagesController@edit');
Route::get('/luggage_search','LuggagesController@index');
Route::get('/luggage_create','LuggagesController@create');
Route::get('/luggage_info','LuggagesController@show');
Route::post('/luggage_search','LuggagesController@search');
// Route::delete('luggages/{id}','LuggagesController@destroy')->namespace('luggages.destroy');
//Manage Luggages Table
Route::get('/luggage/{id}/edit','LuggagesController@edit_table');
Route::post('/luggage/{id}/update','LuggagesController@update');
//Manage Emptytrucks
Route::get('/emptyTruck_edit','EmptycarsController@edit');
Route::get('/emptyTruck_search','EmptycarsController@show');
Route::get('/emtpyTruck_create','EmptycarsController@create');
Route::post('emptyTruck_store','EmptycarsController@store');
Route::get('/emptyTruck_info','EmptycarsController@show');
Route::post('/emptyTruck_search','EmptycarsController@search');
