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

Route::resource('/','ShowPropertiesController');
Route::get('/property/{id}','ShowPropertiesController@show')->name('home');
Route::resource('/profile','ProfileController');
Route::resource('/changepassword','ChangePasswordController');
Route::resource('/property','SearchController');
Route::resource('/wishlist','WishlistController');

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/single_blog', function () {
    return view('single-blog');
});

Route::group(['middleware'=>'admin'], function(){
   Route::get('/adm', 'AdminController@index');
   Route::resource('/adm/attribute_set', 'AdminAttributeSetController');
   Route::resource('/adm/attribute', 'AdminAttributeController');
   Route::resource('/adm/users', 'AdminUsersController');
   Route::resource('/adm/properties', 'AdminPropertiesController');

});

Auth::routes(['verify'=>true]);
Route::resource('/add', 'AddPropertyController');

Route::get('ajax', function(){ 
  return view('ajax'); 
});

Route::post('/postajax','AjaxController@post');
