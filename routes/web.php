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
    return view('home');
});

Route::get('dashboard', 'DashboardController@index');
Route::get('/admin', function () {
    return view('pages.companyadmin');
});

//Company Admin
Route::get('/employee', function () { return view('admin.employee'); });
Route::get('/employeetype', function () { return view('admin.employeetype'); });
Route::get('/users', function () { return view('admin.users'); });
Route::get('/agents', function () { return view('admin.agents'); });
Route::get('/dh', function () { return view('admin.dh'); });
Route::get('/vehicles', function () { return view('admin.vehicles'); });
Route::get('/customers', function () { return view('admin.customers'); });
Route::get('/vendors', function () { return view('admin.vendors'); });





Route::get('/dtd', function () { return view('pages.dtddelivery'); });
Route::get('/dtdpickuporder', function () { return view('pages.dtdpickuporder'); });
Route::get('/warehousereceipts', function () { return view('pages.warehousereceipt'); });
Route::get('/warehouselist', function () { return view('pages.warehouselist'); });
Route::get('/warehousetransfer', function () { return view('pages.warehousetransfer'); });
Route::get('/cargoreleases', function () { return view('pages.cargoreleases'); });
Route::get('/inventory', function () { return view('pages.inventory'); });








