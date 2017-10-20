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

Route::group(['prefix' => 'login','middleware' => 'CheckLogin'], function(){
	Route::get('/' , 'PageController@getLogin');
	Route::post('/' , 'PageController@postLogin');
});
Route::group(['prefix' => 'register','middleware' => 'CheckLogin'], function(){
	Route::get('/' , 'PageController@getRegister');
	Route::post('/' , 'PageController@postRegister');
});
Route::group(['prefix' => 'admin','middleware' => 'CheckAdmin'], function(){
	Route::get('logout',['as' => 'LogOut','uses'=>'PageController@LogOut'] );
	Route::get('dashboard', 'PageController@dashboard');
	Route::get('them-tai-khoan', 'PageController@getThemtaikhoan');
	Route::post('them-tai-khoan', 'PageController@postThemtaikhoan');
	Route::get('danh-sach-tai-khoan',['as' => 'getAlluser','uses'=>'PageController@getAlluser']);
	Route::get('new-post', 'PostController@getAddpost');
	Route::post('new-post', 'PostController@postAddpost');
	Route::get('all-post', 'PostController@getAllposst');
	Route::get('edit-post/{id}', 'PostController@getEditpost');
	Route::post('edit-post/{id}', 'PostController@postEditpost');
	Route::get('them-tag', 'PostController@getTag');
	Route::post('them-tag', 'PostController@postTag');
	Route::get('edit-account/{id}', 'PageController@get_myacount');
	Route::post('edit-account/{id}', 'PageController@post_myacount');
	Route::get('danh-muc',
		['as' => 'getdanhmuc',
		'uses'=>'Danhmuc@getdanhmuc'
		]);
	Route::post('danh-muc',
		['as' => 'postdanhmuc',
		'uses'=>'Danhmuc@postdanhmuc'
		]);
	
	
});
