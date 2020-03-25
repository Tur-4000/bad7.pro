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

Route::get('/', 'MainPageController@index')->name('index');
Route::get('/services', 'ServicesController@index')->name('services');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/portfolio/{workType}', 'PortfolioController@filter')->name('portfolio.filter');
Route::get('/contacts', 'ContactsController@index')->name('contacts');

Route::post('/order/add', 'OrderController@store')->name('order.add');


Route::resource('/manage/portfolio', 'Manage\ManagePortfolioController')
    ->only('index', 'create', 'store', 'edit', 'update', 'destroy')
    ->names('manage.portfolio');

Auth::routes(['register' => false]);
//Auth::routes();

//Route::get('/manage', 'Manage\ManageOrderController@index')
//    ->name('manage.index')
//    ->middleware('auth')
//;
//
//Route::get('/manage/order/deleted', 'Manage\ManageOrderController@deleted')
//    ->name('manage.order.deleted');
//Route::patch('/manage/order/{id}/restore', 'Manage\ManageOrderController@restore')
//    ->name('manage.order.restore');
//Route::resource('/manage/order', 'Manage\ManageOrderController')
//    ->only('show', 'edit', 'update', 'destroy', 'deleted')
//    ->names('manage.order');

Route::get('change-password', 'Auth\ChangePasswordController@index')->name('change-password');
Route::post('change-password', 'Auth\ChangePasswordController@store')->name('change-password.update');

Route::group( ['middleware' => ['auth']], function() {
    Route::resource('/manage/portfolio', 'Manage\ManagePortfolioController')
        ->only('index', 'create', 'store', 'edit', 'update', 'destroy')
        ->names('manage.portfolio');
    Route::get('/manage', 'Manage\ManageOrderController@index')->name('manage.index')->middleware('auth');
    Route::get('/manage/order/deleted', 'Manage\ManageOrderController@deleted')->name('manage.order.deleted');
    Route::patch('/manage/order/{id}/restore', 'Manage\ManageOrderController@restore')->name('manage.order.restore');
    Route::resource('/manage/order', 'Manage\ManageOrderController')
        ->only('show', 'edit', 'update', 'destroy', 'deleted')
        ->names('manage.order');

    Route::resource('/manage/user', 'Manage\ManageUserController')
        ->only('index', 'create', 'store', 'show', 'edit', 'update', 'destroy')
        ->names('manage.user');
    Route::resource('/manage/roles', 'Auth\RoleController')
        ->only('index', 'create', 'store', 'show', 'edit', 'update', 'destroy')
        ->names('manage.role');
    Route::resource('/manage/permissions', 'Auth\PermissionController')
        ->only('index', 'create', 'store', 'show', 'edit', 'update')
        ->names('manage.permission');
    Route::resource('/manage/pages', 'Manage\ManagePageController')
        ->only('create', 'store', 'edit', 'update')
        ->names('manage.pages');
});
