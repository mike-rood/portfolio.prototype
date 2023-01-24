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

Route::group(['namespace' => 'App\Http\Controllers\Portfolio'], function () {
    Route::get('/', 'IndexController')->name('portfolio.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => ['admin.init', 'admin']], function () {
    Route::get('/', 'IndexController')->name('admin.index');
    Route::group(['namespace' => 'Project', 'prefix' => 'project'], function () {
        Route::group(['namespace' => 'Category', 'prefix' => 'category'], function () {
            Route::get('/', 'IndexController')->name('admin.project.category.index');
            Route::get('/create', 'CreateController')->name('admin.project.category.create');
            Route::post('/store', 'StoreController')->name('admin.project.category.store');
            Route::get('/{category}', 'ShowController')->name('admin.project.category.show');
            Route::get('/{category}/edit', 'EditController')->name('admin.project.category.edit');
            Route::patch('/{category}', 'UpdateController')->name('admin.project.category.update');
            Route::delete('/{category}', 'DeleteController')->name('admin.project.category.delete');
        });
        Route::group(['namespace' => 'Tag', 'prefix' => 'tag'], function() {
            Route::get('/', 'IndexController')->name('admin.project.tag.index');
            Route::post('/store', 'StoreController')->name('admin.project.tag.store');
            Route::get('/{tag}/edit', 'EditController')->name('admin.project.tag.edit');
            Route::patch('/{tag}', 'UpdateController')->name('admin.project.tag.update');
            Route::delete('/{tag}', 'DeleteController')->name('admin.project.tag.delete');
        });
        Route::get('/', 'IndexController')->name('admin.project.index');
    });
});

Route::redirect('/home', '/');

Route::get('/welcome', function () {
    return view('welcome');
});
