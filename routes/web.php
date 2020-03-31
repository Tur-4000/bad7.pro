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
    Route::get('/manage', 'Manage\ManageOrderController@index')->name('manage.index');

    Route::get('/manage/order/deleted', 'Manage\ManageOrderController@deleted')->name('manage.order.deleted');
    Route::patch('/manage/order/{id}/restore', 'Manage\ManageOrderController@restore')->name('manage.order.restore');
    Route::resource('/manage/order', 'Manage\ManageOrderController')
        ->only('show', 'edit', 'update', 'destroy', 'deleted')
        ->names('manage.order');

    Route::resource('/manage/pages', 'Manage\ManagePageController')
        ->only('index', 'create', 'store', 'edit', 'update')
        ->names('manage.pages');

    Route::get('/manage/mainpage', 'Manage\ManageMainPageController@show')->name('manage.mainpage');
    Route::get('/manage/manpage/edit', 'Manage\ManageMainPageController@edit')->name('manage.mainpage.edit');
    Route::patch('/manage/manpage/edit', 'Manage\ManageMainPageController@update')->name('manage.mainpage.update');

    Route::get('/manage/services', 'Manage\ManageServicesPageController@show')->name('manage.services');
    Route::get('/manage/services/edit', 'Manage\ManageServicesPageController@edit')->name('manage.services.edit');
    Route::patch('/manage/services/edit', 'Manage\ManageServicesPageController@update')->name('manage.services.update');

    Route::resource('/manage/portfolio', 'Manage\ManagePortfolioController')
        ->only('index', 'create', 'store', 'edit', 'update', 'destroy')
        ->names('manage.portfolio');

    Route::get('/manage/contats', 'Manage\ManageContactPageController@show')->name('manage.contacts');
    Route::get('/manage/contats/edit', 'Manage\ManageContactPageController@edit')->name('manage.contacts.edit');
    Route::patch('/manage/contats/edit', 'Manage\ManageContactPageController@update')->name('manage.contacts.update');


    Route::resource('/manage/user', 'Manage\ManageUserController')
        ->only('index', 'create', 'store', 'show', 'edit', 'update', 'destroy')
        ->names('manage.user');
    Route::resource('/manage/roles', 'Auth\RoleController')
        ->only('index', 'create', 'store', 'show', 'edit', 'update', 'destroy')
        ->names('manage.role');
    Route::resource('/manage/permissions', 'Auth\PermissionController')
        ->only('index', 'create', 'store', 'show', 'edit', 'update')
        ->names('manage.permission');
});
