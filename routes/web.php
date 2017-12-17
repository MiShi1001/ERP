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


Route::get('/index',function (){
    return view('index');
});

Route::group(['prefix' => 'basic'], function() {
    //基本資料->供應商
    Route::get('suppliers', ['as' => 'supplier.index', 'uses' => 'SupplierController@index']);
    //基本資料->供應商->查詢
    Route::post('suppliers/search', ['as' => 'supplier.search', 'uses' => 'SupplierController@search']);
    //基本資料->供應商->表單
    Route::get('suppliers/create', ['as' => 'supplier.create', 'uses' => 'SupplierController@create']);
    //基本資料->供應商->新增
    Route::post('suppliers', ['as' => 'supplier.store', 'uses' => 'SupplierController@store']);
    //基本資料->供應商->編輯
    Route::get('suppliers/{id}/edit', ['as' => 'supplier.edit', 'uses' => 'SupplierController@edit']);
    //基本資料->供應商->更新
    Route::patch('suppliers/{id}', ['as' => 'supplier.update', 'uses' => 'SupplierController@update']);
    //基本資料->供應商->刪除
    Route::delete('suppliers/{id}', ['as' => 'supplier.destroy', 'uses' => 'SupplierController@destroy']);
    //基本資料->供應商->取消
    Route::get('suppliers/recall', ['as' => 'supplier.recall', 'uses' => 'SupplierController@recall']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'setting'], function() {
    //設定->使用者密碼
    Route::get('reset', ['as' => 'user_reset', 'uses' => 'HomeController@reset']);
});