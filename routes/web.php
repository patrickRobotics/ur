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
    return view('pages.index');
});
Route::get('/aboutus',function(){
  return view('pages.aboutus');
});
Route::get('/advancedfeatures',function(){
  return view('pages.advancedfeatures');
});
Route::get('/portfolio',function(){
  return view('pages.portfolio');
});
Route::get('/portfolioitem',function(){
  return view('pages.portfolioitem');
});
Route::get('/login',function(){
  return view('pages.login');
});
Route::get('/sunday_school',function(){
  return view('pages.sunday_school');
});
Route::get('/intercessory',function(){
  return view('pages.intercessory');
});
Route::get('/contact',function(){
  return view('pages.contact');
});
Route::get('/worship',function(){
  return view('pages.worship');
});
Route::get('/register',function(){
  return view('pages.register');
});
Route::get('/user_account',function(){
  return view('pages.user_account');
});
