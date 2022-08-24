<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\ThemeController;
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
    return view('welcome1');
});

// index
ROUTE::get('/themes','ThemeController@index')->name('admin.themes.index');



// create
ROUTE::get('/themes/create','ThemeController@create')->name('admin.themes.create');

//store
ROUTE::post('/themes','ThemeController@store')->name('admin.themes.store');

// show
ROUTE::get('/themes/{theme}','ThemeController@show')->name('admin.themes.show');




//edit
ROUTE::get('/themes/{theme}/edit','ThemeController@edit')->name('admin.themes.edit');

//update
ROUTE::match(['patch', 'put'],'/themes/{theme}','ThemeController@update')->name('admin.themes.update');


//destory
ROUTE::delete('/themes/{theme}/','ThemeController@destroy')->name('admin.themes.destroy');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// middleware
// Route::middleware('auth')->get('/admin', 'Admin\HomeController@index')->name('admin.index');


// Route::get('/admin', 'Admin\HomeController@index')->name('admin.index');


