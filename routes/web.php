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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::match(['get','post'], 'create/event', ['as'=>'create.event' , 'uses'=>'EventController@create']);
Route::match(['get','post'], 'create/listing', ['as'=>'events.listing' , 'uses'=>'EventController@listing']);
Route::get('event/edit/{id}', ['as'=>'edit', 'uses'=>'EventController@edit']);
Route::get('event/delete/{id}', ['as'=>'delete', 'uses'=>'EventController@delete']);
Route::post('event/update', ['as'=>'update.event', 'uses'=>'EventController@update']);
Route::get('event/enable{id}', ['as'=>'event.enable', 'uses'=>'EventController@enable']);
Route::get('eventtype/enable{id}', ['as'=>'etype.enable', 'uses'=>'EtypeController@enable']);
Route::get('event/disable{id}', ['as'=>'event.disable', 'uses'=>'EventController@disable']);


Route::match(['get','post'], 'eventtype/listing', ['as'=>'eventtype.listings' , 'uses'=>'EtypeController@listing']);
Route::get('eventtype/edit/{id}', ['as'=>'etype.edit', 'uses'=>'EtypeController@edit']);
Route::match(['get','post'], 'event/type', ['as'=>'event.type' , 'uses'=>'EtypeController@createtypes']);
Route::get('eventtype/delete/{id}', ['as'=>'etype.delete', 'uses'=>'EtypeController@delete']);
Route::post('eventtype/update', ['as'=>'update.eventtype', 'uses'=>'EtypeController@update']);
Route::get('eventtype/disable{id}', ['as'=>'etype.disable', 'uses'=>'EtypeController@disable']);

Route::get('events/sidebar', ['as'=>'events.sidebar', 'uses'=>'EventController@sidebar']);
