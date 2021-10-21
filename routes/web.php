<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'BlogController@index');
Route::get('/Allblogs', 'BlogController@blogs');
Route::get('/blog/{id}', 'BlogController@singleBlog');
Route::get('/app/get_comments/{id}', 'BlogController@getBlogComments');
Route::post('/app/save_comment', 'BlogController@saveComment');
Route::get('/contact', 'BlogController@contact');
Route::get('/about', 'BlogController@about');
Route::post('/contact', 'BlogController@sendEmail');
Route::get('/app/get_categories', 'BlogController@getCat');
Route::get('/category/{slug}', 'BlogController@singleCat');
Route::get('/categories', 'BlogController@categories');
Route::get('/category_blog/{categoryName}', 'BlogController@categoryBlogIndex');
Route::get('/search', 'BlogController@search');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
