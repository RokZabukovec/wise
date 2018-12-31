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

use Illuminate\Auth\Middleware\Authenticate;

Route::get('/api/expenses', 'ExpenseController@exspenseToJson');

Auth::routes();
Route::post('/profile/update', 'HomeController@updateAvatar')->name('avatarUpdate')->middleware('auth');


Route::post('/home/accounts/income/add/{account_id}', 'IncomeController@addIncome')->name('income');
Route::post('/home/accounts/expense/add/{account_id}', 'ExpenseController@addExpense')->name('expense');
Route::post('/home/accounts/new', 'AccountController@create')->name('create');


Route::get('/home/accounts/{account_id}', 'AccountController@getAccount')->name('account')->middleware('auth');
Route::get('/home/accounts', 'AccountController@getAll')->name('allAccounts')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'LandingPageController@index')->name('landingPage');
