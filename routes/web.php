<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();


Route::get('/users', function () {
    return view('chart.user', [
        'title' => 'Active user per day'
    ]);
});
Route::get('/userstotal', function () {
    return view('chart.usertotal', [
        'title' => 'Home'
    ]);
});
Route::get('/usersservices', function () {
    return view('chart.userservices', [
        'title' => 'Home'
    ]);
});
Route::get('/usersdatas', function () {
    return view('chart.usersdatas', [
        'title' => 'Home'
    ]);
});
Route::get('/usersrevenue', function () {
    return view('chart.userrevenue', [
        'title' => 'Home'
    ]);
});
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'], function(){
	Route::get('/', 'HomeController@index')->name('index');
	Route::get('/normalization/{data}', 'NormalizationController@index');
	Route::group(['prefix'=>'asset', 'as'=>'asset.'], function(){
		Route::resource('products','AssetProductController');
		Route::group(['prefix'=>'products/{product}', 'as'=>'products.'], function(){
			Route::resource('competitors','AssetProductCompetitorController');
		});
		Route::get('data-collections/generate', 'AssetDataCollectionController@generateData');
		Route::resource('data-collections','AssetDataCollectionController');
		Route::resource('models','AssetModelController');
		Route::resource('copy-rights','AssetCopyRightController');
		Route::resource('softwares','AssetSoftwareController');
		Route::resource('insights','AssetInsightController');
		Route::resource('clients','AssetClientController');
		Route::resource('reports','AssetReportController');
		Route::resource('clipping-onlines','AssetClippingOnlineController');
		Route::resource('domains','AssetDomainController');
	});

	Route::group(['namespace'=>'Operasional', 'prefix'=>'operational', 'as'=>'operational.'], function(){
		Route::resource('engine','EngineController');
		Route::resource('database','DatabaseController');
		Route::resource('groupserver','GroupServerController');
		Route::resource('server','ServerController');
		Route::resource('serverxgroup','ServerXGroupController');
		Route::resource('enginexdatabase','EngineXDatabaseController');
		Route::resource('enginexserver','EngineXServerController');
	});

	Route::group(['prefix'=>'ajax', 'namespace'=>'Ajax'], function(){
		Route::get('dashboard/chart-data-collection', 'DashboardController@chartDataCollectionV2');
		Route::get('dashboard/chart-valuasi', 'DashboardController@chartValuasi');
	});
});