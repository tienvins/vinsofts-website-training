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
    return view('master');
});
Route::get('/myRoute',function(){
    echo "Hello";
});
Route::get('/g-laravel',function(){
    echo "G-Laravel";
});
Route::get('themSP', function(){
  $sanpham = new App\SanPham();
  $sanpham->tenSP = "San Pham 1";
  $sanpham->hinhSP = "abc";
  $sanpham->gia = 1000;
  $sanpham->save();
  echo "Da them SP";
});
Route::resource('SanPham','ControllerSanPham');