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
//     return view('layout');
// });


// Route::get('/trang-chu', function () {
//     return view('layout');
// });

// Route::get('/trang-chu', function () {
//     return view('layout');
// });


Route::get('/','HomeController@index');
Route::get('/trang-chu','HomeController@index');
Route::get('/menubar','MenuBarController@index');
Route::get('/grammar','GrammarCardController@index');

Route::get('/vocabulary-title','VocabularyController@vocabularyTitle');



//Route::get('/vocabulary-popular','VocabularyController@vocabularyPopular');/{id_level}
Route::get('/vocabulary-popular','VocabularyController@vocabularyPopular');

Route::get('/vocabulary-items','VocabularyController@vocabularyItems');
//Route::get('/vocabulary-items/{id_level}','VocabularyController@vocabularyItems');





//backend
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/logOut','AdminController@logOut');


