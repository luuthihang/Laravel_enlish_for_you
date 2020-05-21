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

Route::get('/Exercise','controllerExercise@show_exercise');
Route::post('/Result_learn1','controllerExercise@show_result1');


Route::get('/Exercise2','controllerExercise@show_exercise2');
Route::post('/Result_learn2','controllerExercise@show_result2');

Route::get('/Exercise3','controllerExercise@show_exercise3');
Route::post('/Result_learn3','controllerExercise@show_result3');

Route::get('/Exercise4','controllerExercise@show_exercise4');
Route::post('/Result_learn4','controllerExercise@show_result4');

//backend
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/logOut','AdminController@logOut');


#story
Route::get('/all-story','ControllerStory@all_story');
Route::get('/add-story','ControllerStory@add_story');
Route::post('/save-story','ControllerStory@save_story');
Route::get('/edit-story/{id_story}','ControllerStory@edit_story');
Route::get('/delete-story/{id_story}','ControllerStory@delete_story');
Route::post('/update-story/{id}','ControllerStory@update_story');





