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
    return redirect()->route('index');
});

Route::get('/index', 'IndexController@index')->name('index');
Route::post('/index', 'IndexController@search');

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@verify');

Route::get('/logout', 'LogoutController@index')->name('logout');

Route::get('/registration', 'RegistrationController@index')->name('registration');
Route::post('/registration', 'RegistrationController@insertuser');



Route::group(['middleware' => 'sess'], function(){

	Route::group(['middleware' => 'admin'], function(){

		Route::get('/admin', 'AdminController@index')->name('admin');
		Route::get('/admin/user/details/{id}', 'AdminController@userdetails')->name('userdetails');
		Route::get('/admin/user/delete/{id}', 'AdminController@delete_user')->name('delete_user');
		Route::get('/admin/advertise/delete/{id}', 'AdminController@delete_add')->name('delete_add');
		Route::post('/admin/advertise/delete/{id}', 'AdminController@delete');
		Route::get('/admin/category', 'AdminController@category')->name('category');
		Route::get('/admin/addcategory', 'AdminController@addcategory')->name('addcategory');
		Route::post('/admin/addcategory', 'AdminController@submitcategory');
		Route::get('/admin/deletecategory/{name}', 'AdminController@deletecategory')->name('deletecategory');

	});

	Route::get('/home', 'HomeController@index')->name('home');
	Route::post('/home', 'HomeController@search');
	Route::get('/home/advertise/details/{id}', 'HomeController@adddetails')->name('add.details');
	Route::get('/home/menu', 'HomeController@menu')->name('menu');
	Route::get('/home/menu/categoriesproduct/{name}', 'HomeController@categoriesproduct')->name('categoriesproduct');

	Route::get('/profile', 'ProfileController@index')->name('profile');
	Route::get('/profile/add/delete/{id}', 'ProfileController@delete_view')->name('delete_view');
	Route::post('/profile/add/delete/{id}', 'ProfileController@delete');
	Route::get('/profile/adpost', 'ProfileController@adpost')->name('adpost');
	Route::post('/profile/adpost', 'ProfileController@submitad');
	Route::get('/profile/userinfo/{id}', 'ProfileController@information')->name('information');
	Route::get('/updateinfo/{id}', 'ProfileController@updateinfo')->name('updateinfo');
	Route::post('/updateinfo/{id}', 'ProfileController@updateuser');

});




