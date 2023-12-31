<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('/dashboard', 'DashboardController@index');

Route::resource('/expense_reports', 'ExpenseReportController');

Route::get( '/expense_reports/{id}/confirmDelete', 'ExpenseReportController@confirmDelete' );

Route::get( '/expense_reports/{expense_report}/expenses/create', 'ExpenseController@create');

Route::post( '/expense_reports/{expense_report}/expenses/', 'ExpenseController@store');

Route::get( '/expense_reports/{id}/confirmSendMail', 'ExpenseReportController@confirmSendMail' );

Route::post( '/expense_reports/{id}/sendMail', 'ExpenseReportController@sendMail' );