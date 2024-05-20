<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
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

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/post/{post}', 'HomeController@post')->name('home.post');
Route::get('/category/{category}', 'HomeController@category')->name('home.category');

Route::get('/register', 'CustomerController@register')->name('home.register');
Route::post('/register', 'CustomerController@check_register');
Route::get('/login', 'CustomerController@login')->name('home.login');
Route::post('/login', 'CustomerController@check_login');
Route::get('/logout', 'CustomerController@logout')->name('home.logout');


Route::get('login/{social}', [
    'as' => 'login.{social}',
    'uses' => 'SocialAccountController@redirectToProvider'
]);

Route::get('login/{social}/callback', [
    'as' => 'login.{social}.callback',
    'uses' => 'SocialAccountController@handleProviderCallback'
]);


Route::get('/admin/register', 'AdminController@register')->name('admin.register');
Route::post('/admin/register', 'AdminController@check_register');
Route::get('/admin/login', 'AdminController@login')->name('admin.login');
Route::post('/admin/login', 'AdminController@check_login');
Route::get('/admin/logout', 'AdminController@logout')->name('admin.logout');

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
    Route::get('/', "AdminController@dashboard")->name('admin.dashboard');
    Route::resources([
        'category'=> 'CategoryController',
        'post'=> 'PostController',
        'account'=> 'AccountController',
        'comment'=> 'CommentController',
        'user'=> 'UserController'
    ]);
});

Route::get('/search', 'SearchController@getSearch');
Route::post('search/name', 'SearchController@getSearchAjax')->name('home.search');
Route::post('/comment/{post_id}', 'HomeController@post_comment')->name('home.comment');


