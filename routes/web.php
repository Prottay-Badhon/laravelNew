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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about',function(){
  return view('about',['channel' => 'Badhon.com']);
});
Route::get('/home',function(){
  echo "this is home  page";
});

Route::get('/service',function(){
  echo "this service page";
});
Route::get('/contact',function(){
  return view('pages.contact');
})->middleware('age');

Route::get('/Blog',function(){
  return view('Blog');
})->middleware('log');
Route::get('/Badhon','badhon@calculate');
Route::get('/contact','badhon@viewContactPage')->name('contact');


Route::get('/blog',function(){
  return view('Blog');
})->name('blog');

Route::get('/service','badhon@viewService')->name('service');
Route::get('about','badhon@viewAbout')->name('about');

Route::get('/Add-Category','badhon@viewAddCategory')->name('addCategory');
Route::get('/All-Category','badhon@viewAllCategory')->name('allCategory');
Route::post('/insert','badhon@AddCategory')->name('insertAddCategory');
Route::post('/allCategory-insert','badhon@insertAllCategory')->name('allCategoryInsert');
Route::get('/allCategory/Show{id}','badhon@allCategoryShowMethod');
Route::get('/allCategory/Delete{id}','badhon@allCategoryDelete');
Route::get('/editCategory{id}','badhon@editCategory');
Route::post('/updateCategoryCore{id}','badhon@updateCategory');

Route::post('/Insert-with-image','postController@uploadImage')->name('imageInsert');

//write  post route
Route::get('/write/post','postController@writePostMethod')->name('writePost');
Route::get('/all/post','postController@allpostMethod')->name('allpost');
