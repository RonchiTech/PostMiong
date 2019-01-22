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

Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');

Route::resource('/projects', 'ProjectsController');

Route::resource('home/posts','PostsController');
Route::get('/projects/{project}','ProjectsController@show');
// Route::get('/projects', 'ProjectsController@index');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::get('/projects/{project}','ProjectsController@show');
// Route::post('/projects','ProjectsController@store');
// Route::get('/projects/{project}/edit','ProjectsController@edit');
// Route::patch('/projects/{project}','ProjectsController@update');
// Route::delete('/projects/{project}','ProjectsController@destroy');



/*
Convention 

GET /projects (index)
GET /projects/create (create)
GET /projects/{id} (show)
POST /projects (store)
GET /projects/{id}/edit (edit)
PATCH /projects/{id} (update)
DELETE /projects/{id} (destroy)

*/