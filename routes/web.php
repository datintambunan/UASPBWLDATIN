<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/', 'DashboardController@index')->name('/');

    Route::get('field', 'FieldController@index')->name('field');
    Route::get('field/create', 'FieldController@create')->name('field.create');
    Route::post('field', 'FieldController@insert')->name('field.store');
    Route::get('field/edit/{field}', 'FieldController@edit')->name('field.edit');
    Route::put('field', 'FieldController@update')->name('field.update');
    Route::delete('field', 'FieldController@delete')->name('field.delete');

    Route::get('customer', 'CustomerController@index')->name('customer');
    Route::get('customer/create', 'CustomerController@create')->name('customer.create');
    Route::post('customer', 'CustomerController@insert')->name('customer.store');
    Route::get('customer/edit/{customer}', 'CustomerController@edit')->name('customer.edit');
    Route::put('customer', 'CustomerController@update')->name('customer.update');
    Route::delete('customer', 'CustomerController@delete')->name('customer.delete');

    Route::get('transaction', 'TransactionController@index')->name('transaction');
    Route::get('transaction/create', 'TransactionController@create')->name('transaction.create');
    Route::post('transaction', 'TransactionController@insert')->name('transaction.store');
    Route::get('transaction/edit/{transaction}', 'TransactionController@edit')->name('transaction.edit');
    Route::put('transaction', 'TransactionController@update')->name('transaction.update');
    Route::delete('transaction', 'TransactionController@delete')->name('transaction.delete');

    Route::get('user', 'userController@index')->name('user');
    Route::get('user/create', 'userController@create')->name('user.create');
    Route::post('user', 'userController@insert')->name('user.store');
    Route::get('user/edit/{user}', 'userController@edit')->name('user.edit');
    Route::put('user', 'userController@update')->name('user.update');
    Route::delete('user', 'userController@delete')->name('user.delete');
});

