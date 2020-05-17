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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/property_detail', function () {
    return view('property_details');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/elements', function () {
    return view('elements');
});
Route::get('/property', function () {
    return view('property');
});
Route::get('/single_blog', function () {
    return view('single-blog');
});

Route::group(['middleware'=>'admin'], function(){
   Route::get('/adm', 'AdminController@index');
   Route::resource('/adm/attribute_set', 'AdminAttributeSetController');
   Route::resource('/adm/attribute', 'AdminAttributeController');
   Route::resource('/adm/users', 'AdminUsersController');

});
// Route::get('/', function () {
//     return view('search');
// });
Auth::routes(['verify'=>true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/add', 'AddPropertyController');

Route::get('ajax', function(){ 
  return view('ajax'); 
});

Route::post('/postajax','AjaxController@post');