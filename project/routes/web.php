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

Route::resource('/post','PostController');
/*
Route::get('/posts/{postId}', function($postId){
	return 'welcome login user : '. $postId;
})->name('posts');

Route::get('/test','Test@test');

Route::get('posts/{postId}/comments/{commentsId}', function($postId, $commentsId){
	return '아이디: '.$postId.', comment 아이디:'.$commentsId;
});

Route::group(['middleware' => 'auth'], function(){
	Route::get('dashboard', function(){
		return 'dashboard routed !!';
	});
	Route::get('user/profile',function(){
		return 'User is profile!!';
	});
});

Route::group(['namespace'=>'Admin'], function(){
// App\Http\Controllers\Admin
});

Route::group(['prefix' => 'admin'], function(){
	Route::get('show', function(){
		return 'configure prefix domain';
		// /system/show
	});
});
Route::resource('user.post.pw','PostController');

user/{userid}/post/{postid}
Route::resource('user.post', 'Controllers이름')
post/{postid}/comment/{commentid}
Route::resource('post.comment', 'Controllers이름')*/
Route::get('user/{id}', 'UserController@show')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
