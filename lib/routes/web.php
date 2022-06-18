<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','FrontendController@getHome');
Route::get('details/{id}/{slup}.html','FrontendController@getDetails');
Route::get('Du_an_NhaDat','FrontendController@getDu_an_NhaDat');

Route::get('Lien_he','FrontendController@getLien_he');
Route::get('TinTuc_DuAn','FrontendController@getTinTuc_DuAn');
Route::get('TinTuc_DuAn/TinTuc_VanBan','FrontendController@getTinTuc_VanBan');
Route::get('TinTuc_DuAn/TinTuc_video','FrontendController@getvideo');//sai o day
Route::get('TinTuc_DuAn/TinTuc_video/Datthue','FrontendController@getDatthue');//sai o day

Route::group(['namespace'=>'Admin'],function(){
	Route::group(['prefix'=>'login','middleware'=>'CheckLogetIn'],function(){
		Route::get('/','LoginController@getLogin');
		Route::post('/','LoginController@postLogin');

	});
	//hàm route này dùng để làm đăng xuất thành cong(1)
     Route::get('logout','HomeController@getLogout');



	//hàm route này dùng để làm đăng nhập thành cong(1)
		Route::group(['prefix'=>'admin','middleware'=>'CheckLogetOut'],function(){

			route::get('home','HomeController@getHome');

            //tạo tiếp mục route con để chạy giao diện đên category(danh mục )
			route::group(['prefix'=>'category'],function(){
				Route::get('/','CategoryController@getCate');//thêm 
				Route::post('/','CategoryController@postCate');

				Route::get('edit/{id}','CategoryController@getEditCate');//xóa
				Route::post('edit/{id}','CategoryController@postEditCate');

				Route::get('delete/{id}','CategoryController@getDeleteCate');

				

			});

           //tạo tiếp mục route con để chạy giao diện đên product(sảm phẩm )
			route::group(['prefix'=>'product'],function(){
				Route::get('/','ProductController@getProduct'); 
   
                Route::get('add','ProductController@getAddProduct');//thêm
				Route::post('add','ProductController@postAddProduct');

				Route::get('edit/{id}','ProductController@getEditProduct');//sửa
				Route::post('edit/{id}','ProductController@postEditProduct');

				Route::get('delete/{id}','ProductController@getDeleteProduct');//xóa

				

			});


		});

});
// có nghĩa là tất cả các thư mục route trong đăng nhập oute::group(['namespace'=>'Admin'] này được lưu vào thư mục controller /Admin
// bươc 2 ta phải định nghĩa hàm getLogin này ra trong Admin/LoginController
// tiep tục định nghĩa lại hàm postlogin vì đang làm backend người dùng trong LoginController
//(1) định nghĩa lại người dùng trong Homecontroller
