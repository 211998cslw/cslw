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

/*面试宝典的后台系统*/
Route::get('add', 'BackgroundSystem\InterviewController@add');
Route::post('do_add', 'BackgroundSystem\InterviewController@do_add');
Route::get('index', 'BackgroundSystem\InterviewController@index');
Route::get('adminlogin', 'BackgroundSystem\InterviewController@adminlogin');
Route::post('do_adminlogin', 'BackgroundSystem\InterviewController@do_adminlogin');//后台登录
Route::get('adminadd', 'BackgroundSystem\InterviewController@adminadd');
Route::post('do_adminadd', 'BackgroundSystem\InterviewController@do_adminadd');
Route::get('adminindex', 'BackgroundSystem\InterviewController@adminindex');

Route::get('hlogin', 'BackgroundSystem\InterviewController@hlogin');
Route::post('do_hlogin', 'BackgroundSystem\InterviewController@do_hlogin');

// /*七牛云*/
Route::any('qiniu','BackgroundSystem\InterviewController@qiniu');
Route::any('qiniu_add','BackgroundSystem\InterviewController@qiniu_add');
