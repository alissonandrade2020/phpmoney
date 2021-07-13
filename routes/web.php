<?php

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){

    //Route::any('historic-search', 'BalanceController@searchHistoric')->name('historic.search');
    //Route::get('historic', 'BalanceController@historic')->name('admin.historic');

    //Route::post('transfer', 'BalanceController@transferStore')->name('transfer.store');
    //Route::post('confirm-transfer', 'BalanceController@confirmTransfer')->name('confirm.transfer');
    //Route::get('transfer', 'BalanceController@transfer')->name('balance.transfer');

    //Route::post('withdraw', 'BalanceController@withdrawStore')->name('withdraw.store');
    //Route::get('withdraw', 'BalanceController@withdraw')->name('balance.withdraw');

    //Route::post('deposit', 'BalanceController@depositStore')->name('deposit.store');
    //Route::get('deposit', 'BalanceController@deposit')->name('balance.deposit');
    //Route::get('balance', 'BalanceController@index')->name('admin.balance');

    Route::get('admin', 'App\Http\Controllers\Admin\AdminController@index')->name('admin.home');
});

Route::get('/', 'App\Http\Controllers\Site\SiteController@index')->name('home');

Auth::routes();

