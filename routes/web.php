  
<?php




//Route::get('/hello', 'WelcomeController@hello');

//Route::get('/', 'HomeController@index'); 


Route::get('/article', 'Home1Controller@index'); 

Route::get('/', function(){
	return view('welcome');
});

Route::get('/article', 'Home1Controller@index');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/article/{id}', 'ArticleController@index');

Route::get('/info', 'InfoController@index');

Route::get('/contact', 'ContactController@index')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/manage', 'ArticleController@manage')->name('manage');
Route::get('/manage/add','ArticleController@add');
Route::post('/manage/create','ArticleController@create');
Route::get('/manage/edit/{id}','ArticleController@edit');
Route::post('/manage/update/{id}','ArticleController@update');
Route::get('/manage/delete/{id}','ArticleController@delete');
Route::get('/manage/cetak_pdf', 'ArticleController@cetak_pdf');

//user
Route::get('/manageuser', 'UserController@manageuser')->name('manageuser');
Route::get('/manageuser/add','UserController@add');
Route::post('/manageuser/create','UserController@create');
Route::get('/manageuser/edit/{id}','UserController@edit');
Route::post('/manageuser/update/{id}','UserController@update');
Route::get('/manageuser/delete/{id}','UserController@delete');
Route::get('/manageuser/cetak_pdf', 'UserController@cetak_pdf');