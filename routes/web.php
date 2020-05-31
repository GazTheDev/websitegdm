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

Route::get('/', function () {
    return view('page.homepage');

});
Route::get('/pages/{slug}', function($slug){
    $pages = App\Pages::where('slug', '=', $slug)->firstOrFail();
    return view('page.pages', compact('pages'));
});

Route::get('/posts', function () {
    $posts =     App\Post::orderBy("created_at", "desc")->get();
    return view('posts.post_index', compact('posts'));
});
Route::get('posts/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->firstOrFail();
	return view('posts.post_single', compact('post'));
});
Route::get('/downloads', function () {
    $downloads = App\Download::orderBy("created_at", "desc")->get();
    return view('downloads.download_index', compact('downloads'));
});
Route::get('/downloads/{slug}', function($slug){
	$downloads = App\Download::where('slug', '=', $slug)->firstOrFail();
	return view('downloads.download_single', compact('downloads'));
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('user', 'UserController@show')->name('user');
Route::post('user/update', 'UserController@update')->name('user.update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('contact', 'ContactController@contact');
Route::post('contact', ['as'=>'contact.store','uses'=>'ContactController@contactPost']);
