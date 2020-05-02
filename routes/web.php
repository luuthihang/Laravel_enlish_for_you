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
Route::get('/vocabulary-popular/{id_category}','VocabularyController@vocabularyPopular');

//Route::get('/vocabulary-items','VocabularyController@vocabularyItems');
Route::get('/vocabulary-items/{id_level}','VocabularyController@vocabularyItems');


Route::get('/schema','VocabularyController@getImages');

//Route::get('/story/{id_story}','ControllerStory@showStory');
Route::get('/title-story/story/{id_story}',[
	'as'=>'story',
	'uses'=>'ControllerStory@showStory'
	]);


Route::get('/title-story','ControllerStory@titleStory');


Route::get('/grammar/detail-grammar/{id_grammar}',[
	'as'=>'detail-grammar',
	'uses'=>'GrammarCardController@detail_grammar'
	]);



Route::get('/Video',[
	'as'=>'Video',
	'uses'=>'VideosController@VideoTitle'
	]);


Route::get('/video/show-list-videos/{id_category_video}',[
	'as'=>'showvideos',
	'uses'=>'VideosController@showVideos'
	]);

//Route::get('/showvideos/{id_category_video}','VideosController@showVideos');

Route::get('/data','VideosController@insertData');

//backend
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/logOut','AdminController@logOut');




