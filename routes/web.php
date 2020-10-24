  
<?php




//Route::get('/hello', 'WelcomeController@hello');

Route::get('/', 'HomeController@index'); 

Route::get('/home', 'HomeController@index'); 

Route::get('/article', 'Home1Controller@index'); 

//Route::get('/', function(){
//	return view('welcome');
//});

Route::get('/article', 'Home1Controller@index');

Route::get('/about', 'AboutController@index');

Route::get('/article/{id}', 'ArticleController@index');

Route::get('/info', 'InfoController@index');

Route::get('/contact', 'ContactController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/manage', 'ArticleController@manage')->name('manage');
Route::get('/manage/add','ArticleController@add');
Route::post('/manage/create','ArticleController@create');
Route::get('/manage/edit/{id}','ArticleController@edit');
Route::post('/manage/update/{id}','ArticleController@update');
Route::get('/manage/delete/{id}','ArticleController@delete');