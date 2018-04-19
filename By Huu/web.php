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



// Route trong trang quan ly nhan vien Vinsofts

Route::get('mylaravel/nhanvien', function(){
	Schema::create('nhanvien', function ($table) {
            $table->increments('id');
            $table->string('hoten');
            $table->integer('ngaysinh');
            $table->string('email')->unique();
            $table->string('diachi');
            $table->string('phone');
            $table->boolean('gioitinh');
            $table->timestamps();
        });
});
Route::get('mylaravel/insert', 'InsertController@getInsert');
Route::post('mylaravel/insert', 'InsertController@postInsert');

Route::get('mylaravel/edit/{id}', 'EditController@getEdit')->name('getEdit')->where('id','[0-9]+');
Route::post('mylaravel/edit/{id}', 'EditController@postEdit')->name('getEdit')->where('id','[0-9]+');

Route::get('mylaravel/qlnv', 'InsertController@getqlnv')->name('getqlnv');
Route::get('mylaravel/qlnv/delete/{id}','IndexController@getqlnvdel')->name('getqlnvdel')->where('id','[0-9]+');



