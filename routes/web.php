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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
// 我们的资料
Route::get('/ecosystem',  function(){
        return view('ecosystem');
});

// 我们的产品
Route::get('/features', 'WebController@features');

// 关于我们
Route::get('/about_us', function(){
    return view('about_us');
});

// 新闻中心
Route::group(['prefix'=>'news'], function(){
    Route::get('list/{page}', 'WebController@newsList');
    Route::get('/about_news/{id}', 'WebController@aboutNews');
});

// 附件中心
    Route::get('/pdf_list', 'WebController@pdfList');


    Route::get('/dco', function () {
        return view('DCO');
    });