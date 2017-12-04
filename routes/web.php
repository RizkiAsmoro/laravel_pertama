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


$controller = function () {
return view ('welcome');
};
Route::get('/', $controller ); 

//membuat controller menggunakan class
Route ::get ('/welcome', "UserController@welcome");

Route ::get ('/about', "UserController@about");

Route ::get ('/contact', "UserController@contact");

Route ::get ('/product/discount', "ProductController@discount");
Route ::get ('/product/detail', "ProductController@detail");

Route ::get ('/products', "ProductController@index");
Route ::get ('/products/add', "ProductController@add");
Route ::post ('/products/add', "ProductController@add");

// Route::get('/about', function () {
//     return "Hello from about";
// });

// //belajar route parameter
// Route::get('/profile/{username?}', function ($username="unname") {
//     return "This is page for user ".$username;
// });

// Route::get('/profile/{username}/comment/{id}', function ($username, $id) {
//     return "Comment ID ".$id. " For User ".$username;
// });

