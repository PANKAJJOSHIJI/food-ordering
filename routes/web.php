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

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');

/*................Public Routes.............................*/
Route::get('public_pages/home_page','PublicController@first');
Route::get('public_pages/about_page','PublicController@aboutus');
Route::get('public_pages/menu_page','PublicController@menu');
Route::get('public_pages/contact_us','PublicController@contactus');
Route::get('public_pages/element_page','PublicController@element_page');
Route::get('public_pages/blog_hompage','PublicController@blog_home');
Route::get('public_pages/blog_detailpage','PublicController@blog_detail');



/*  End of Public Routes */


/*.............................Admin Routes..................*/

Route::get('admin_pages/admin_page','AdminController@first');
Route::get('/admin_pages/data_table','AdminController@data_table');

/*..............End of Admin Routes................*/

/*...........................Private Routes........................*/


Route::get('private_pages/home_page','PrivateController@first');
Route::get('private_pages/about_page','PrivateController@aboutus');
Route::get('private_pages/menu_page','PrivateController@menu');
Route::get('private_pages/contact_us','PrivateController@contactus');
Route::get('private_pages/element_page','PrivateController@element_page');
Route::get('private_pages/blog_hompage','PrivateController@blog_home');
Route::get('private_pages/blog_detailpage','PrivateController@blog_detail');
Route::get('private_pages/add_food','PrivateController@food_add');
Route::get('private_pages/cart_details','PrivateController@cart');
/* End of Private Routes............................*/