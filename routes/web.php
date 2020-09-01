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
    return view('main.login');
});

Route::get('/sidebarHome', 'SidebarController@sidebarHome')->name('sidebarHome');
Route::get('/sidebar2', 'SidebarController@sidebar2')->name('sidebar2');
Route::get('/sidebar3', 'SidebarController@sidebar3')->name('sidebar3');
Route::get('/sidebar4', 'SidebarController@sidebar4')->name('sidebar4');
Route::get('/sidebar5', 'SidebarController@sidebar5')->name('sidebar5');
Route::get('/sidebar6', 'SidebarController@sidebar6')->name('sidebar6');
Route::get('/sidebar7', 'SidebarController@sidebar7')->name('sidebar7');
Route::get('/sidebar8', 'SidebarController@sidebar8')->name('sidebar8');
Route::get('/sidebar9', 'SidebarController@sidebar9')->name('sidebar9');
Route::get('/sidebar10', 'SidebarController@sidebar10')->name('sidebar10');

Route::get('/sidebar2/supreme', 'Sidebar2Controller@index')->name('sidebar2.supreme');
