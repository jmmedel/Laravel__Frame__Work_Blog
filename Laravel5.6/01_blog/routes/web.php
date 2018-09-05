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

// This is public Control 
Route::get('/','PublicController@index' )->name('index');
Route::get('/post/{post}','PublicController@singlePost')->name('singlePost');
Route::get('/about','PublicController@about')->name('about');
Route::get('/contact','PublicController@contact')->name('contact');
Route::post('/contact','PublicController@contactPost')->name('contactPost');
Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::prefix('user')->group(function(){
    Route::post('new-comment','UserController@newComment')->name('UserController');
    Route::get('dashboard','UserController@dashboard')->name('userDashboard');
    Route::get('comments','UserController@comments')->name('userComments');
    Route::post('comment/{id}/delete','UserController@deleComment')->name('deleteComment');
    Route::get('profile','UserController@profile')->name('userProfile');
    Route::post('profile','UserController@ProfilePost')->name('userProfilePost');
    
});

Route::prefix('author')->group(function(){
    Route::get('dashboard','AuthorController@dashboard')->name('authorDashboard');
    Route::get('posts','AuthorController@post')->name('authorPosts');
    Route::get('comments','AuthorController@comments')->name('authorComments');
    Route::post('posts/new','AuthorController@createPost')->name('createPost');
    Route::get('post/{id}/edit','AuthorController@postEdit')->name('postEdit');
    Route::post('post/{id}/edit','AuthorController@postEditPost')->name('postEditPost');
    Route::post('post/{id}/delete','AuthorController@deletePost')->name('deletePost');
    Route::get('posts/new','AuthorController@newPost')->name('newPost');
    
});

Route::prefix('admin')->group(function(){
    Route::get('/dashboard','AdminController@dashboard')->name('adminDashboard');
    Route::get('/posts','AdminController@posts')->name('adminPosts');
    Route::get('/comments','AdminController@comments')->name('adminComments');
    Route::get('/users','AdminController@users')->name('adminUsers');
    Route::post('post/{id}/edit','AdminController@postEditPost')->name('adminpostEditPost');
    Route::post('post/{id}/delete','AdminController@deletePost')->name('admindeletePost');
    Route::get('post/{id}/edit','AdminController@postEdit')->name('adminpostEdit');
    Route::post('comment/{id}/delete','AdminController@deleteComment')->name('admindeleteComment');
    Route::get('user/{id}/edit','AdminController@editUser')->name('admineditUser');
    Route::post('user/{id}/edit','AdminController@editUserPost')->name('admineditUserPost');
    Route::post('user/{id}delete','AdminController@deleteUser')->name('admindeleteUser');
    
});