<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::group(array('before' => 'auth.basic'), function()
{
	Route::get('invoice','backupController@invoice');	
	Route::get('invoice_item','backupController@invoiceItem');
	Route::get('type_document','backupController@typeDocument');
	Route::post('invoice','backupController@saveInvoice');
	Route::post('type_document','backupController@saveTypeDocument');

});
